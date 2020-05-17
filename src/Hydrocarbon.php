<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;

class Hydrocarbon extends FunctionalGroup implements IHydrocarbon
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}


	public function reactions(): array
	{
		return [];
	}
}