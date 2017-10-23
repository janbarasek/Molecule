<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;



use kdaviesnz\atom\Atom;
use kdaviesnz\atom\Bond;

class Operations
{
    public function displayAtomsSimplified(array $atoms)
    {
        $arr = array();
        foreach($atoms as $key=>$atom) {
            $bonds = $atom->getBonds();
            $bondTypes = array();
            foreach ($bonds as $bond) {
                $bondTypes[] = $bond->getType() . " " . ($bond->isRecip?"recip":"not recip");
            }
            $arr[] = array(
                "chem"=>$atom->chem,
                "bonds"=>$bondTypes
            );
        }
        var_dump($arr);
    }

    public function atomsToCanonicalSMILE(array $atoms):string
    {

        //   $this->displayAtomsSimplified($atoms);

        $firstAtom = array_shift($atoms);
        $canonicalSMILE = $firstAtom->chem;
        // First pass - ignore branches
        if (empty($atoms)) {
            return $canonicalSMILE;
        } else {
            $bonds = $firstAtom->getBonds();
            $bondType = empty($bonds) || $bonds[0]->getType() == "single"?"":$bonds[0]->getType();
            $canonicalSMILE.=$bondType;
        }

        foreach ($atoms as $atom) {
            $canonicalSMILE .= $atom->chem;
            $bonds = array_values(array_filter(
                $atom->getBonds(),
                function ($bond) {
                    return !$bond->isRecip;
                }
            ));
            $bondType = empty($bonds) || $bonds[0]->getType() == "single" ? "" : $bonds[0]->getType();
            $canonicalSMILE .= $bondType;
        }


        $canonicalSMILE = str_replace(array("double"), array("="), $canonicalSMILE);

        return $canonicalSMILE;
    }

    public function addBonds(array $atomsToAdd, array $trunkItems)
    {

        // Find where the single bonds are and add them.
        for ($i=0;$i<count($trunkItems);$i++) {
            if ($trunkItems[$i]=="-") {
                $id = uniqid();
                $atomsToAdd[$i-1]->addBond(new Bond($atomsToAdd[$i+1], $id, "single"));
                $atomsToAdd[$i+1]->addBond(new Bond($atomsToAdd[$i-1], $id, "single", 0.00, true));
            }
        }

        // Find where the double bonds are and add them.
        for ($i=0;$i<count($trunkItems);$i++) {
            if ($trunkItems[$i]=="=") {
                $id = uniqid();
                $atomsToAdd[$i-1]->addBond(new Bond($atomsToAdd[$i+1], $id, "double"));
                $atomsToAdd[$i+1]->addBond(new Bond($atomsToAdd[$i-1], $id, "double", 0.00, true));
            }
        }


        $atomsToAdd = array_values($atomsToAdd);

        return $atomsToAdd;
    }

    public function addBranches(string $canonicalSMILE, array &$atoms)
    {

        preg_match("/\((.*)\)/", $canonicalSMILE, $matches); // First pass CC=C1C
        $position = null;
        $branch = null;
        if (isset($matches[1])) {
            $position = strpos($canonicalSMILE, "(")-1; // First pass 0
            $branch = $matches[1]; // First pass ""
        }
        $trunk = str_replace("(".$branch.")", "", $canonicalSMILE); // First pass CC=C1C
        // Add each item in trunk to $atoms array as IAtom and adding bonds between each atom.
        $trunkItems = str_split($trunk); // First pass array("C","C","=","C","1", "C")

        $atomsToAdd = (array_filter(
            $trunkItems,
            function($item) {
                return  ctype_alpha($item);
            }
        ));
        $atomsToAdd = array_map(
            function($item) {
                return new Atom($item);
            },
            $atomsToAdd
        );
        $atomsToAdd = $this->addBonds($atomsToAdd, $trunkItems);

        $atoms = array_merge($atoms, $atomsToAdd);

        if ($position!=0) {
            // merge branch
            $id = uniqid();
            $this->displayAtomsSimplified($atoms);
            die();
            $atoms[$position-1]->addBond(new Bond($atomsToAdd[0], $id));
            $atomsToAdd[0]->addBond(new Bond($atoms[$position], $id, "single", 0.00, true));
        }


        // Repeat from start for each item in the branch, adding a bond between the atom at $position and the
        // first atom of the branch.
        // Keep repeating until there's no more branches.

        if (!empty($branch)) {
            $this->addBranches($branch, $atoms);
        }

    }


}