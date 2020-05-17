<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class VinylicCarbocation extends Carbocation implements IVinylicCarbocation
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}
}