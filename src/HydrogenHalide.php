<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


use kdaviesnz\atom\Atom;
use kdaviesnz\atom\Bond;
use kdaviesnz\atom\IHalogen;

class HydrogenHalide extends Molecule implements IHydrogenHalide
{
	public $hydrogenAtom;

	public $halogenAtom;


	/**
	 * HydrogenHalide constructor.
	 */
	public function __construct(MoleculeComponent $molecule, IHalogen $halogen)
	{
		parent::__construct($molecule);

		$this->halogenAtom = $halogen;
		$this->hydrogenAtom = new Atom("H");
		$this->hydrogenAtom->addBond(new Bond($halogen, "single"));
		$halogen->addBond(new Bond($this->hydrogenAtom, "single", uniqid()));
		parent::__construct(new Atom("H"), $halogen);
	}
}