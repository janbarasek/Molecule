<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


class Alkane extends SaturatedHydrocarbon implements IAlkane
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}


	public function prefix(int $carbonCount): array
	{
		return [
			1 => "meth",
			2 => "eth",
			3 => "prop",
			4 => "but",
			5 => "pen",
			6 => "hex",
			7 => "hep",
			8 => "oct",
			9 => "non",
			10 => "dec",
			11 => "undec",
			12 => "dodec",
			13 => "tridec",
			14 => "tetradec",
			15 => "pentadec",
			16 => "hexadec",
			17 => "heptadec",
			18 => "octadec",
			19 => "nonadec",
			20 => "eicos",
		];
	}


	public function molecularFormula(int $carbonCount)
	{

	}


	public function carbonBondAngle()
	{
		return 109.5;
	}


	public function oxidisation()
	{
		// TODO: Implement oxidisation() method.
	}


	public function oxidisationCallback()
	{
		return $this->oxidisation();
	}


	public function reactions(): array
	{
		// Create water molecule
		$H1 = new Atom("H");
		$H2 = new Atom("H");
		$O = new Atom("O");

		// Bonds
		$H1 . addBond(new Bond($O));
		$H2 . addBond(new Bond($O));
		$O . addBond(new Bond($H1));
		$O . addBond(new Bond($H2));

		// Create CO2 molecule
		$C = new Atom("C");
		$O1 = new Atom("O");
		$O2 = new Atom("O");

		// Bonds
		$C . addBond(new Bond($O1));
		$C . addBond(new Bond($O2));
		$O1 . addBond(new Bond($C));
		$O2 . addBond(new Bond($C));

		return [
			"oxidisation" => [
				"products" => [new Molecule($H1, $H2, $O), new Molecule($C, $O1, $O2)],
				"reaction" => $this->oxidisationCallback(),
			],
		];
	}
}