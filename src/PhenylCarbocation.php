<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class PhenylCarbocation extends ArylCarbocation implements IPhenylCarbocation
{

    public function __construct(MoleculeComponent $molecule)
    {
        parent::__construct($molecule);
    }
}