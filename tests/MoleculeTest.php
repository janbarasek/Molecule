<?php

require_once("vendor/autoload.php");
require_once("vendor/kdaviesnz/atom/src/IBond.php");
require_once("vendor/kdaviesnz/atom/src/Bond.php");
require_once("vendor/kdaviesnz/atom/src/IAtomicElement.php");
require_once("vendor/kdaviesnz/atom/src/AtomicElement.php");
require_once("vendor/kdaviesnz/atom/src/IAtom.php");
require_once("vendor/kdaviesnz/atom/src/Atom.php");

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

        // Create water molecule
        $H1 = new \kdaviesnz\chemistry\Atom("H");
        $H2 = new \kdaviesnz\chemistry\Atom("H");
        $O = new \kdaviesnz\chemistry\Atom("O");

        // Bonds
        $H1->addBond(
            new \kdaviesnz\chemistry\Bond($O)
        );
        $H2->addBond(
            new \kdaviesnz\chemistry\Bond($O)
        );
        $O->addBond(
            new \kdaviesnz\chemistry\Bond($H1)
        );
        $O->addBond(
            new \kdaviesnz\chemistry\Bond($H2)
        );

        $molecule = new \kdaviesnz\chemistry\Molecule($H1, $H2, $O);
    }

}
