<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;

interface IChemical
{

	/**
	 * @link https://en.wikipedia.org/wiki/Substituted_phenethylamine
	 */
	public function isPhenethylamine();


	/**
	 * Hydrocarbons contain just hydrogen and carbon.
	 *
	 * @return mixed
	 */
	public function isHydrocarbon(): bool;


	/**
	 * Hydrocarbon containing just single bonds.
	 * Formula CnH2n+1
	 *
	 * @return mixed
	 */
	public function isAlkane(): bool;


	/**
	 *  A carbonyl group is a C=O group — in other words, a carbon atom double-bonded to oxygen. A carbonyl group is not considered a functional group in itself; instead, it’s considered a component
	 *
	 * @return bool
	 */
	public function isCarbonyl(): bool;


	/**
	 * The halides are organic compounds that contain one or more halogens. (Halogens are those elements found in column 7A of the periodic table.)
	 *
	 * @return mixed
	 */
	public function isHalide(): bool;


	/**
	 * An alkene is a molecule that contains a carbon-carbon double bond.
	 *
	 * @return bool
	 */
	public function hasAlkeneGroup(): bool;


	/**
	 * Alkynes are molecules that contain a carbon-carbon triple bond.
	 *
	 * @return bool
	 */
	public function hasAlkyneGroup(): bool;


	/**
	 * The aromatics (or arenes, as they’re often called) consist of rings containing alternating double bonds. The principal aromatic compound is benzene, a six-carbon ring containing three alternating double bonds.
	 *
	 * @return bool
	 */
	public function hasArmomaticGroup(): bool;


	/**
	 * Alcohols consist of the general formula R-OH, and have names that end with the suffix –ol.
	 *
	 * @return bool
	 */
	public function hasAlcoholGroup(): bool;


	/**
	 * Thiols are foul-smelling compounds, of the general formula R-SH. Generally, names of thiols end with the suffix –thiol.
	 *
	 * @return bool
	 */
	public function hasThiolGroup(): bool;


	/**
	 * Ethers are molecules containing an oxygen sandwiched between two carbons.
	 *
	 * @return bool
	 */
	public function hasEtherGroup(): bool;


	/**
	 * In an aldehyde  the carbonyl group is flanked by one hydrogen and one R group. It may be helpful to think of an aldehyde as a carbonyl group at the end of an organic molecule.
	 *
	 * @return bool
	 */
	public function hasAldehydeGroup(): bool;


	/**
	 * Keytones are compounds that contain a carbonyl group sandwiched between two carbons. If an aldehyde can be thought of as a carbonyl at the end of a molecule, then a ketone is a carbonyl somewhere in the middle of a molecule.
	 *
	 * @return bool
	 */
	public function hasKeynoteGroup(): bool;


	/**
	 * The carboxylic acid functional group is made up of a carbonyl group attached to an OH group
	 *
	 * @return bool
	 */
	public function hasCarboxylicAcidGroup(): bool;


	/**
	 * An ester is basically a carboxylic acid with the hydrogen snipped off, and an R group glued in its place.
	 *
	 * @return bool
	 */
	public function hasEsterGroup(): bool;


	/**
	 * Amides are close relatives of esters, except that amides have a nitrogen (rather than an oxygen) next to the carbonyl group.
	 *
	 * @return bool
	 */
	public function hasAmideGroup(): bool;


	/**
	 * Amines are nitrogen atoms that take the place of a carbon atom in an alkane (the three forms of an amine are R-NH2, R2NH, or R3N). Nicotine as well as many other familiar compounds like cocaine, mescaline, amphetamine, and morphine are all amine-containing compounds. Many drugs (both legal and illegal) contain amines that are essential to the drug’s activity.
	 *
	 * @return bool
	 */
	public function hasAmineGroup(): bool;


	/**
	 * Nitriles  are compounds that contain a carbon triply bonded to nitrogen.
	 *
	 * @return bool
	 */
	public function hasNitrileGroup(): bool;


	/**
	 * A methyl group is an alkyl derived from methane, containing one carbon atom bondedto three hydrogen atoms — CH3.
	 *
	 * @return bool
	 */
	public function hasMethylGroup(): bool;


	/**
	 * Methylenedioxy is the term used in the field of chemistry, particularly in organic chemistry, for a functional group with the structural formula R-O-CH2-O-R' which is connected to the rest of a molecule by two chemical bonds.
	 *
	 * @return bool
	 */
	public function hasMethylenedioxyGroup(): bool;


	/**
	 * In organic chemistry, a methylene bridge, methylene spacer, or methanediyl group is any part of a molecule with formula -CH
	 *
	 * @return bool
	 */
	public function hasMethanediylGroup(): bool;


	/**
	 * In organic chemistry, the phenyl group or phenyl ring is a cyclic group of atoms with the formula C6H5. Phenyl groups are closely related to benzene and can be viewed as a benzene ring, minus a hydrogen,which maybe replaced my some other element or compound to serve as a functional group.
	 *
	 * @return bool
	 */
	public function hasPhenylGroup(): bool;


	/**
	 * Amphetamines are a group of synthetic psychoactive drugs called central nervous system (CNS) stimulants.1The collective group of amphetamines includes amphetamine, dextroamphetamine, and methamphetamine.2 Amphetamine is made up of two distinct compounds: pure dextroamphetamine and pure levoamphetamine.
	 *
	 * @return bool
	 */
	public function isAmphetmine(): bool;


	/*
	 “t’s easy to call a molecule an acid or a base, and say, “That’s all there is to it, folks.” But the terms acid and base are a little more elusive. A molecule is an acid only in comparison to another molecule, and likewise for a base. When the terms acid or base are used when discussing a particular molecule, they’re used in comparison to a reference molecule — water. Water is capable of acting both as an acid and as a base. Any molecule that’s more acidic than water is generally considered an acid, and any molecule that’s more basic than water is generally considered a base.

But keep in mind that these terms are general. Most people would agree that nitric acid is an acid; its name even includes the word acid. But even nitric acid can act as a base under the right conditions! In the presence of the more acidic sulfuric acid, nitric acid acts as a base (you see this reaction in the nitration of benzene in Chapter 15). This reaction is an extreme case, but I hope it makes you wary of rigidly classifying a molecule as an acid or a base, even though ”
“doing so is convenient. Whether a molecule acts as an acid or as a base really depends on what’s thrown into the reaction pot along with it.”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.
Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.
	 */

	/*
	 * “Svante Arrhenius, a prominent chemist from the early 20th century (whose ideas on acids and bases later earned him the Nobel Prize), defined acids as molecules that dissociate in water to make the hydronium ion, H3O+. Strong Arrhenius acids are those that completely dissociate in water to make hydronium ions, while acids that only partially dissociate in water are said to be weak Arrhenius acids. Nitric acid (HNO3), shown in Figure 4-1, is a strong acid because it completely dissociates in water to make hydronium ions; acetic acid (CH3COOH) only partially dissociates in water and is a weak acid. (The direction of the equilibrium in Figure 4-1 is shown with the larger arrow.)”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.

	“The Arrhenius definition, though useful, has some “basic” problems. First, the definition can’t apply to all molecules, because many molecules aren’t soluble in water. Second, not all bases dissociate to generate the hydroxide ion. Ammonia (NH3), for example, creates hydroxide ion in solution but has no hydroxide ion in its formula, so it isn’t a basic molecule by virtue of dissociation.

Therefore, other acid-base definitions that are more widely applicable are necessary. The most commonly used acid-base definition in organic chemistry is the Brønsted-Lowry definition of acids and bases. A Brønsted-Lowry acid is a molecule that donates a proton (H+) to a base; a Brønsted-Lowry base is a molecule that accepts a proton from an acid.”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.
	“To keep the terminology straight, the deprotonated acid becomes what is known as the conjugate base (usually negatively charged, but not always), while the protonated base becomes the conjugate acid, as Figure 4-3 shows.”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.

	“The most commonly used acid-base definition in organic chemistry is the Brønsted-Lowry definition of acids and bases. A Brønsted-Lowry acid is a molecule that donates a proton (H+) to a base; a Brønsted-Lowry base is a molecule that accepts a proton from an acid.”

	“To keep the terminology straight, the deprotonated acid becomes what is known as the conjugate base (usually negatively charged, but not always), while the protonated base becomes the conjugate acid, as Figure 4-3 shows.”


	The base accepts the H+ proton by furnishing a lone pair of electrons for a coordinate-covalent bond, whish is a covalent bond in which one atom furnishes both of the electrons for the bond. In the coordinate-covalent bond, one atom furnishes both bonding electrons.

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.
Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.


	“The most general method for classifying acids and bases is the Lewis acid and base definition. A Lewis acid is a molecule that accepts a pair of electrons to make a covalent bond, and a Lewis base is a molecule that donates electrons to make a covalent bond.”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.

	 */
	public function isAcid(): bool;


	/*
	 * “Arrhenius bases, on the other hand, are molecules that dissociate to make hydroxide ions, OH–. As is the case with acids, bases that dissociate completely to generate hydroxide ions are strong bases, while bases that only partially dissociate to generate hydroxide ions are weak bases. Potassium hydroxide (KOH), shown in Figure 4-2, is a strong base because it completely dissociates in water to make hydroxide ions; beryllium hydroxide (Be[OH]2) is a weak base because it only partially dissociates in water.”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.

	“The most commonly used acid-base definition in organic chemistry is the Brønsted-Lowry definition of acids and bases. A Brønsted-Lowry acid is a molecule that donates a proton (H+) to a base; a Brønsted-Lowry base is a molecule that accepts a proton from an acid.”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.

	The base accepts the H+ proton by furnishing a lone pair of electrons for a coordinate-covalent bond, whish is a covalent bond in which one atom furnishes both of the electrons for the bond. In the coordinate-covalent bond, one atom furnishes both bonding electrons.

	eg NH3 + HCl -> NH4 Cl


	“To keep the terminology straight, the deprotonated acid becomes what is known as the conjugate base (usually negatively charged, but not always), while the protonated base becomes the conjugate acid, as Figure 4-3 shows.”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.

	“The most general method for classifying acids and bases is the Lewis acid and base definition. A Lewis acid is a molecule that accepts a pair of electrons to make a covalent bond, and a Lewis base is a molecule that donates electrons to make a covalent bond.”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.
	 */
	public function isBase(): bool;


	/*
	 “The aromatics (or arenes, as they’re often called) consist of rings containing alternating double bonds. The principal aromatic compound is benzene, a six-carbon ring containing three alternating double bonds”

	“Benzene and other aromatics are a highly interesting class of ringed compounds of exceptional stability.”

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.
Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.
	 */
	public function hasBenzeneGroup(): bool;


	/*
	 “Aromatics are a class of ring compounds containing double bonds. The name aromatic comes from the fact that many of the simple aromatic compounds that were first isolated were highly fragrant; the lovely odors of such substances as vanilla, almond, and wintergreen are due to the presence of aromatic compounds in these products. But many aromatic compounds are unpleasant smelling, or are odorless. Most simple aromatics, in fact, are obtained commercially from coal tar. Aromatic compounds contain double bonds, but they don’t react like alkenes, so they’re classified as a separate functional group. ”

	“Because of this greater stability, aromatic compounds require significantly more vigorous reaction conditions to make them react compared to the conditions required to react simple alkenes.”

	“The actual structure of benzene is the hybrid of its two resonance structures”

	“For a molecule to be aromatic, it must meet the following four conditions:

It must be a ring.
It must be flat (planar).
It must have in each atom of the ring a p orbital that’s orthogonal to the plane of the ring. In other words, no atom in the ring can be sp3 hybridized.
It must have a Hückel number of pi electrons, following the 4n + 2 rule.”

	“If the molecule meets the first three conditions, but only has 4n pi electrons, the molecule is anti-aromatic. If the molecule fails any or all of the first three conditions, then the molecule is non-aromatic. Following are some details about each of these points.”

	 */
	public function isAromatic(): bool;


	/*
	 Return in order an array of functional groups that the chemical contains.
	 */
	public function getFunctionalGroups();


}