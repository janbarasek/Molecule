<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class AllylicCarbocation extends Carbocation implements IAllylicCarbocation
{
    /*
     If the carbon bearing the positive charge is immediately adjacent to a carbon-carbon double bond, the carbocation is termed an allylic carbocation. The simplest case (all R = H) is called the allyl carbocation.
     */

    public function __construct(MoleculeComponent $molecule)
    {
        parent::__construct($molecule);
    }
}