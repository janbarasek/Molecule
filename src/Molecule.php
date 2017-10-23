<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;

use kdaviesnz\atom\IAtom;
use kdaviesnz\matter\Matter;


class Molecule extends MoleculeComponent
{

    /**
     * Molecule constructor.
     */
    public function __construct(array $atoms)
    {
        $this->atoms = $atoms;
    }

    public function getResonanceStructures():array
    {
        return array();
    }

    public function hasChiralCentre(): bool
    {
        // TODO: Implement hasChiralCentre() method.
        return false;
    }

    public function isNucleophile(): bool
    {
        // TODO: Implement isNucleophile() method.
        return false;
    }

    public function isElectrophile(): bool
    {
        // TODO: Implement isElectrophile() method.
        return false;
    }

    public function isChiral(): bool
    {
        return false;
    }

    public function getAtoms():array
    {
        return $this->atoms;
    }

}
