<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;



class FactoryClient
{

    /**
     * FactoryClient constructor.
     */
    public function __construct(string $canonicalSMILE)
    {
        // Convert $canonicalSMILE to array of $atoms
        $atoms = array();
        // Logic to determine what type of factory eg AlkeneFactory, AmineFactory, MoleculeFactory
        $factoryType = "AlkeneFactory";
        switch($factoryType) {
            case "AlkeneFactory":
                $factory = new AlkeneFactory(...$atoms);
                break;
        }
        $factory->startFactory();
        die("FactoryClient");
    }

}
