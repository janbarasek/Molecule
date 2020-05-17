<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


use kdaviesnz\atom\Atom;
use kdaviesnz\atom\IAtom;

class Alkene extends UnsaturatedHydrocarbon implements IAlkene
{
	public $carbonAtomWithDoubleBond;

	public $doubleBond;


	/**
	 * @param $carbonAtomWithDoubleBond
	 * @param $doubleBond
	 */
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
		$this->carbonAtomWithDoubleBond = $this->getCarbonAtomWithDoubleBond();
		$bonds = $this->carbonAtomWithDoubleBond->getBonds();
		foreach ($bonds as $bond) {
			$bondedAtom = $bond->getBondedElement();
			if ($bondedAtom->symbol() == "C" && $bond->getType() == "double") {
				$this->doubleBond = $bond;
			}
		}
	}


	public function getCarbonAtomWithDoubleBond(): IAtom
	{
		$operations = new Operations();
		$atoms = $this->molecule->getAtoms();
		$carbonAtoms = array_filter(
			$atoms,
			function ($atom) use ($atoms) {
				return $atom->symbol() == "C";
			}
		);

		foreach ($carbonAtoms as $atom) {
			$bonds = $atom->getBonds();
			foreach ($bonds as $bond) {
				$bondedAtom = $bond->getBondedElement();
				if ($bondedAtom->symbol() == "C" && $bond->getType() == "double" && $bond->isRecip) {
					return $atom;
				}
			}
		}

		if (empty($atom)) {
			throw new \Exception("Carbon atom with double bond not found in alkene.");
		}

		// We should never get here.
		return $atom;
	}


	public function hydroboration(): IAlcohol
	{
		// TODO: Implement hydroboration() method.
	}


	public function halogenation(): IMolecule
	{
		// TODO: Implement halogenation() method.
	}


	public function halohydrinformation(): IAlcohol
	{
		// TODO: Implement halohydrinformation() method.
	}


	public function reduction(): IAlkane
	{
		// TODO: Implement reduction() method.
	}


	public function oxidation(): IAlcohol
	{
		// TODO: Implement oxidation() method.
	}


	public function oxymercuration(): IAlcohol
	{
		// TODO: Implement oxymercuration() method.
	}


	/*
	  Alkenes contain a carbon-carbon double bond and, with one double bond and no rings, have the general formula CnH2n
	  The simplist alkene is ethylene
	 */
	public function molecularFormula(int $carbonCount)
	{

	}


	public function carbonBondAngle(): float
	{
		return 120.00;
	}


	public function hydrogenation(IHydrogenHalide $hydrogenHalide): IMolecule
	{
		/*
			Steps. IReactionStep
			ref Ionization.php

			Params: nucleophile with double bond, $hydrogenHalide (both passed by reference)
			eg CH3CH==CHCH3 + $hydrogenHalide

			Get the π (double) bond (IBond object, by reference) ($carbonCarbonBond)
			CH3CH == $carbonCarbonBond == CHCH3 + $hydrogenHalide

			Change $carbonCarbonBond to a single bond eg CH==CH becomesc CH---C
			CH3CH -- $carbonCarbonBond --- CHCH3 + $hydrogenHalide

			Get the hydrogen atom of $hydrogenHalide  eg "H" of HBR
			CH3CH -- $carbonCarbonBond --- CHCH3 + $hydrogenHalideHydronAtom - $hydrogenHalideHalogenAtom

			And a new bond from the atom that $carbonCarbonBond points to and point it to $hydrogenHalideHydronAtom
			CH3CH -- $carbonCarbonBond -- $carbonCarbonBondCarbonAtom --- $carbonHydrogenHalideHalogenAtomBond -- $hydrogenHalideHydronAtom -- $hydrogenHalideHalogenAtom

			Change the atom that B1 points to (A2) to a + ion by subtracting an election (-- valence electrons).
			$carbonCarbonBondCarbonAtom->valence--

			Add an electron to A1.
			$hydrogenHalideHydronAtom->valence++

			If A1 now has more than 8 valence electrons then
				Remove the bond between A1 and the atom it's bonded to (A3)
				$hydrogenHalide->removeBond()

				Add an atom to A3 to change it to a - ion.
				$hydrogenHalideHydronAtom->valence++

			Add bond from A3 to A2 (B3)
			new $hydrogenHalideHydronAtom_CarbonCarbonBondCarbonAtom_bond

			Subtract an electron from A3.
			$hydrogenHalideHydronAtom--; (no longer an ion)
			Add an electron to A2.
			$carbonCarbonBondCarbonAtom++;

		*/;
		$reaction = new ElectrophilicAddition($this, $hydrogenHalide, $this->getDoubleBondCarbonAtom(), $hydrogenHalide->getHydrogenAtom(), $this->getDoubleBond(), $hydrogenHalide->getHalideAtom(), $hydrogenHalide->getBond());

		return $reaction->products;
	}


	public function hydration(ICatalyst $sulfuricAcidCatalyst): IAlcohol
	{
		$reaction = new Hydration($this, $water, $sulfuricAcidCatalyst);

		return $reaction->products[0];
	}
}