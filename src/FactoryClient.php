<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;



use kdaviesnz\atom\Atom;
use kdaviesnz\atom\Bond;
use phpDocumentor\Reflection\Types\Integer;

class FactoryClient
{

    private $operations;

    /**
     * FactoryClient constructor.
     */
    public function getMolecule(string $canonicalSMILE)
    {

        $this->operations = new Operations();

        // Convert $canonicalSMILE to array of $atoms
        $atoms = array();
        // "CC(CC1=CC2=C(C=C1)OCO2)NC"

        // Start
        // Trunk = Remove first branch and save position
        // $postion = 2 // 0 based
        // branch = (CC1=CC2=C(C=C1)OCO2)
        // Recursive. $atoms is passed by reference.
        $this->operations->addBranches($canonicalSMILE, $atoms);

      //  print_r($atoms);
        $this->operations->atomsToCanonicalSMILE($atoms);

        // Logic to determine what type of factory eg AlkeneFactory, AmineFactory, MoleculeFactory
        // @todo

        $factoryType = "AlkeneFactory";
        switch($factoryType) {
            case "AlkeneFactory":
                $factory = new AlkeneFactory($atoms);
                break;
        }
        $molecule = $factory->getMolecule();
        return $molecule;
    }

}
