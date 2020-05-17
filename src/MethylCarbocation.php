<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class MethylCarbocation extends Carbocation implements IMethylCarbocation
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}
}