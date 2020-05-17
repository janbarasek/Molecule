<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class Alcohol extends UnsaturatedHydrocarbon implements IAlcohol
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}
}