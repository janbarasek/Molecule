<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class MethylCarbocation extends Carbocation implements IMethylCarbocation
{
    public function __construct(MoleculeComponent $molecule)
    {
        parent::__construct($molecule);
    }

}