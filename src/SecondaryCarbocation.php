<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;



class SecondaryCarbocation extends Carbocation implements ISaturatedHydrocarbon
{

    public function __construct(MoleculeComponent $molecule)
    {
        parent::__construct($molecule);
    }

}