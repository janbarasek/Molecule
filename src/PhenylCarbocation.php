<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class PhenylCarbocation extends ArylCarbocation implements IPhenylCarbocation
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}
}