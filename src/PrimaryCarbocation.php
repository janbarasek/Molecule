<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class PrimaryCarbocation extends Carbocation implements IPrimaryCarbocation
{

    public function __construct(MoleculeComponent $molecule)
    {
        parent::__construct($molecule);
    }

}