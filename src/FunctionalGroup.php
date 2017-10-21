<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class FunctionalGroup extends Molecule implements IFunctionalGroup
{

    public function reactions(): array
    {

    }

    public function hydrogenCount(int $carbonCount)
    {
        // TODO: Implement hydrogenCount() method.
    }

    public function molecularFormula(int $carbonCount)
    {
        // TODO: Implement molecularFormula() method.
    }

    public function freeRadicalHalogenation(): array
    {
        // TODO: Implement freeRadicalHalogenation() method.
    }

    public function isElectrophile(): bool
    {
        // TODO: Implement isElectrophile() method.
    }

    public function isNucleophile(): bool
    {
        // TODO: Implement isNucleophile() method.
    }

    public function isChiral(): bool
    {
        // TODO: Implement isChiral() method.
    }

    public function carbonBondAngle()
    {
        // TODO: Implement carbonBondAngle() method.
    }

    public function prefix(int $carbonCount)
    {
        // TODO: Implement prefix() method.
    }



}