<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


use kdaviesnz\atom\IAtom;

class AlkeneFactory extends Factory
{
	public function __construct(array $atoms)
	{
		$this->factoryMethod($atoms);
	}


	protected function factoryMethod(array $atoms)
	{
		$this->molecule = new Molecule($atoms);
		$this->molecule = new Alkene($this->molecule);
	}
}