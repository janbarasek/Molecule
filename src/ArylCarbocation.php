<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class ArylCarbocation extends Carbocation implements IArylCarbocation
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}
}