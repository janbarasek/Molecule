<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class BenzylicCarbocation extends Carbocation implements IBenzylicCarbocation
{

    public function __construct(MoleculeComponent $molecule)
    {
        parent::__construct($molecule);
    }

}