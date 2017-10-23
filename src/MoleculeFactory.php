<?php
declare(strict_types=1); // must be first line


namespace kdaviesnz\molecule;

use kdaviesnz\atom\IAtom;

class MoleculeFactory extends Factory
{
    public function __construct(array $atoms)
    {
        $this->factoryMethod($atoms);
    }

    protected function factoryMethod(array $atoms)
    {
        $this->molecule = new Molecule($atoms);
    }

}