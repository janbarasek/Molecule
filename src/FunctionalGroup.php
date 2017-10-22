<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class FunctionalGroup extends MoleculeDecorator implements IFunctionalGroup
{

    /**
     * FunctionalGroup constructor.
     */
    public function __construct(MoleculeComponent $molecule)
    {
        $this->molecule = $molecule;
    }

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
        return $this->molecule->isElectrophile();
    }

    public function isNucleophile(): bool
    {
        // TODO: Implement isNucleophile() method.
        return $this->molecule->isNucleophile();
    }

    public function isChiral(): bool
    {
        // TODO: Implement isChiral() method.
        return $this->molecule->isChiral();
    }

    public function carbonBondAngle()
    {
        // TODO: Implement carbonBondAngle() method.
    }

    public function prefix(int $carbonCount)
    {
        // TODO: Implement prefix() method.

    }

    public function hasChiralCentre(): bool
    {
        // TODO: Implement hasChiralCentre() method.
        return $this->molecule->hasChiralCentre();
    }

    public function getAtoms(): array
    {
        // TODO: Implement getAtoms() method.
        return $this->molecule->getAtoms();
    }

    public function getResonanceStructures(): array
    {
        // TODO: Implement getResonanceStructures() method.
        return $this->molecule->getResonanceStructures();
    }


}