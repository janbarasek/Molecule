<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class VinylicCarbocation extends Carbocation implements IVinylicCarbocation
{

    public function __construct(MoleculeComponent $molecule)
    {
        parent::__construct($molecule);
    }
}