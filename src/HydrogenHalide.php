<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;


class HydrogenHalide extends Molecule implements IHydrogenHalide
{


    /**
     * HydrogenHalide constructor.
     */
    public function __construct(IHalogen $halogen)
    {
        $H = new Atom("H");
        $H->addBond(new bond($halogen, "single"));
        $halogen->addBond(new bond($H, "single"));
        parent::__construct(new Atom("H"), $halogen);
    }
}