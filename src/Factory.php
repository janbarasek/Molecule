<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;

use kdaviesnz\atom\IAtom;

abstract class Factory
{
    protected abstract function factoryMethod(array $atoms);
    protected $molecule;

    public function getMolecule():IMolecule
    {
        return $this->molecule;
    }
}
