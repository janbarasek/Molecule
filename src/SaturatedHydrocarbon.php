<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class SaturatedHydrocarbon extends Hydrocarbon implements ISaturatedHydrocarbon
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}


	public function freeRadicalHalogenation(): array
	{
		// TODO: Implement freeRadicalHalogenation() method.
	}


	public function carbonBondAngle()
	{
		// TODO: Implement carbonBondAngle() method.
	}


	public function prefix(int $carbonCount)
	{
		// TODO: Implement prefix() method.
	}


	public function hydrogenCount(int $carbonCount)
	{
		// TODO: Implement hydrogenCount() method.
	}


	public function molecularFormula(int $carbonCount)
	{
		// TODO: Implement molecularFormula() method.
	}
}