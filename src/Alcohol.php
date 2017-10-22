<?php
declare(strict_types=1); // must be first line


namespace kdaviesnz\molecule;


class Alcohol extends UnsaturatedHydrocarbon implements IAlcohol
{

    /**
     * Alcohol constructor.
     */
    public function __construct(MoleculeComponent $molecule)
    {
        parent::__construct($molecule);
    }

}