<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class TertiaryCarbocation extends Carbocation implements ITertiaryCarbocation
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}
}