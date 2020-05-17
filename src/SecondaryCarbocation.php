<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class SecondaryCarbocation extends Carbocation implements ISaturatedHydrocarbon
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}
}