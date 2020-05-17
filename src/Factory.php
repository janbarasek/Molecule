<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


use kdaviesnz\atom\IAtom;

abstract class Factory
{
	protected $molecule;


	public function getMolecule(): IMolecule
	{
		return $this->molecule;
	}


	protected abstract function factoryMethod(array $atoms);
}
