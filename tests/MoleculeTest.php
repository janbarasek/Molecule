<?php

require_once("vendor/autoload.php");
require_once("src/IMolecule.php");
require_once("src/Molecule.php");

class MoleculeTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function tearDown()
    {

    }

    public function testMolecule()
    {

        $fc = new \kdaviesnz\molecule\FactoryClient();
        $molecule = $fc->getMolecule("C-C=C-(O-H)CC");
        var_dump(get_class($molecule));


      //  $molecule = new \kdaviesnz\molecule\FactoryClient("CC(CC1=CC2=C(C=C1)OCO2)NC");
    }

}
