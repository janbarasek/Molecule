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

        $atoms = array();

        // Recursive. $atoms is passed by reference.
        $this->operations->addBranches($canonicalSMILE, $atoms);

        $this->operations->addLoopBonds($atoms);

        $this->operations->atomsToCanonicalSMILE($atoms);


        $factoryType = "";

        // Logic to determine what type of factory eg AlkeneFactory, AmineFactory, MoleculeFactory
        if (strpos($canonicalSMILE, "C=C")!==false) {
            $factoryType = "AlkeneFactory";
        }

        switch($factoryType) {
            case "AlkeneFactory":
                $factory = new AlkeneFactory($atoms);
                break;
            default:
                $factory = new MoleculeFactory($atoms);
                break;
        }
        $molecule = $factory->getMolecule();
        return $molecule;
    }

}
