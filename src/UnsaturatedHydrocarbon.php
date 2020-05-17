<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class UnsaturatedHydrocarbon extends Hydrocarbon
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}


	public function freeRadicalHalogenation(): array
	{
		// TODO: Implement freeRadicalHalogenation() method.
	}


	public function molecularFormula(int $carbonCount)
	{
		// TODO: Implement molecularFormula() method.
	}


	public function carbonBondAngle()
	{
		// TODO: Implement carbonBondAngle() method.
	}


	public function hydrogenCount(int $carbonCount)
	{
		// TODO: Implement hydrogenCount() method.
	}


	public function prefix(int $carbonCount)
	{
		// TODO: Implement prefix() method.
	}
}