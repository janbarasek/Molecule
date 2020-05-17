<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class PrimaryCarbocation extends Carbocation implements IPrimaryCarbocation
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}
}