<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;

class Hydrocarbon extends FunctionalGroup implements IHydrocarbon
{

    /**
     * Hydrocarbon constructor.
     */
    public function __construct(MoleculeComponent $molecule)
    {
        parent::__construct($molecule);
    }

    public function reactions(): array
    {
        return array();
    }

}