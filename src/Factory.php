<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;

use kdaviesnz\atom\IAtom;

abstract class Factory
{
    protected abstract function factoryMethod(IAtom...$atoms);

    public function startFactory(IAtom...$atoms):IMolecule
    {
        $mfg = $this->factoryMethod(...$atoms);
        return $mfg;
    }
}
