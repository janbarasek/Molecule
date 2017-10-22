<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class Carbocation extends MoleculeDecorator implements ICarbocation
{
    /*
     A carbocation is molecule in which a carbon atom bears three bonds and a positive charge. Carbocations are generally unstable because they do not have eight electrons to satisfy the octet rule.
     */

    /**
     * Carbocation constructor.
     */
    public function __construct(MoleculeComponent $molecule)
    {
        $this->molecule = $molecule;
    }

    public function isElectrophile(): bool
    {
        // TODO: Implement isElectrophile() method.
        return $this->molecule->isElectrophile();
    }

    public function isChiral(): bool
    {
        // TODO: Implement isChiral() method.
        return $this->molecule->isChiral();
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

    public function isNucleophile(): bool
    {
        // TODO: Implement isNucleophile() method.
        return $this->molecule->isNucleophile();
    }

    public function hasChiralCentre(): bool
    {
        // TODO: Implement hasChiralCentre() method.
        return $this->hasChiralCentre();
    }
}