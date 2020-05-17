<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


interface IFunctionalGroup
{
	/*
	ref Organic Chemistry 8th Edition.
	Where bonds to an atom are not speci ed, the atom is assumed to be bonded to one or more carbon or hydrogen atoms in the rest of the molecule.

	Acid anhydride - RC(=O)OC(=O)R
	Acid chloride - RC(=O)Cl
	Alcohol - RCO
	Aldehyde - RC=O
	Alkane - CC
	Alkene - C=C
	Alkyne - C#C
	Amide - RC(=O)N
	Amine, primary - RCN
	Amine, secondary - RCNCR
	Amine, tertiary - RCN(RC)CR
	Carboxylic acid - RC(=O)OH
	Disulfide - RSSR
	Epoxide - C1CO1
	Ester - RC(=O)OC
	Ether - ROR
	Haloalkane - RX X 5 F, Cl, Br, I
	Ketone - RC(=O)R
	Nitrile - RC#N
	Nitro - R[N+](=O)[O-]
	Phenol - C1=CC=C(C=C1)O
	Sulfide - RSR
	Thiol - RSH
	 */


	/*
	 A. Alcohols
	(RRR)C-OH
The functional group of an alcohol is an -OH (hydroxyl) group bonded to a tetra- hedral carbon atom (a carbon having single bonds to four other atoms). Here is the Lewis structure of ethanol. Note that an -OH group is called a hydroxyl, but when attached to a carbon, that combination is referred to as an alcohol group, and the compound is similarly called an alcohol.

	We can also represent this alcohol in a more abbreviated form called a condensed structural formula. In a condensed structural formula, CH3 indicates a carbon bonded to three hydrogens, CH2 indicates a carbon bonded to two hydrogens, and CH indicates a carbon bonded to one hydrogen. Unshared pairs of electrons are generally not shown in a condensed structural formula. Thus, the condensed structural formula for the alcohol with molecular formula C2H6O is CH3-CH2-OH. It is also common to write these formulas in an even more condensed manner by omitting all single bonds: CH3CH2OH.

	Alcohols are classified as primary (1degree), secondary (2degree), or tertiary (3degree) depending on the number of carbon atoms bonded to the carbon bearing the -OH group.

	Primary (1degree)
A compound containing a functional group bonded to a carbon atom bonded to only one other carbon atom and two hydrogens.
Secondary (2degree)
A compound containing a functional group bonded to a carbon atom bonded to two other carbon atoms and one hydrogen atom.
Tertiary (3degree)
A compound containing a functional group bonded to a carbon atom bonded to three other carbon atoms.


	ref Organic Chemistry 8th Edition.

	 */

	/*
	 * Amines

	RCN

	The functional group of an amine is an amino group, a nitrogen atom bonded to one, two, or three carbon atom(s) by single bonds. In a primary (18) amine, nitrogen is bonded to one carbon atom. In a secondary (28) amine, it is bonded to two carbon atoms, and in a tertiary (38) amine, it is bonded to three carbon atoms. Notice that this classification scheme is different from that used with alcohols and halides.

	Amino group
A functional group containing a nitrogen atom bonded to one, two, or three carbon atom(s) by single bonds.
Primary (1degree) amine
An amine in which nitrogen is bonded to one carbon and two hydrogens.
Secondary (2degree) amine
An amine in which nitrogen is bonded to two carbons and one hydrogen.
Tertiary (3degree) amine
An amine in which nitrogen is
bonded to three carbons.
	 */


	/*
	 Aldehydes and Ketones

	Aldehyde - RC=O
	Ketone - RC(=O)R

The functional group of both aldehydes and ketones is the C=O (carbonyl) group. In formaldehyde, CH2O, the simplest aldehyde, the carbonyl carbon is bonded to two hydrogens. In all other aldehydes, it is bonded to one hydrogen and one carbon. In a condensed structural formula, the aldehyde group may be writ- ten showing the carbon-oxygen double bond as -CH=O; alternatively, it may be written -CHO. In a ketone, the carbonyl carbon is bonded to two carbon atoms.

	Carbonyl group
A C=O group.

	 Aldehyde
A compound containing a -CHO group.

	Ketone
A compound containing a carbonyl group bonded to two carbons.


	 */

	/*
Carboxylic Acids

	Carboxylic acid - RC(=O)OH

The functional group of a carboxylic acid is a !COOH (carboxyl: carbonyl 1 hydroxyl) group. In a condensed structural formula, a carboxyl group may also be written -CO2H.

	Carboxylic acid
A compound containing a carboxyl, -COOH, group.

	Carboxyl group
A -COOH group.

	 */

	/*
		Carboxylic Esters
A carboxylic ester, commonly referred to as an ester, is a derivative of a carboxylic acid in which the hydrogen of the carboxyl group is replaced by a carbon-containing group.

	RC(=O)OC

			Carboxylic ester
A derivative of a carboxylic acid in which H of the carboxyl group is replaced by a carbon.
	 */

	/*
	 A carboxylic amide, commonly referred to as an amide, is a derivative of a carbox- ylic acid in which the !OH of the carboxyl group is replaced by an amine. As the model shows, the group is planar, something we will explain later

	Amide - RC(=O)N

	Carboxylic amide
A derivative of a carboxylic acid in which the !OH is replaced by an amine.

	 */


	/*
	 “Because alkanes are essentially inert under most conditions, virtually the only reaction of alkanes that you see is the free-radical halogenation reaction. This reaction is often the first reaction that you encounter in organic chemistry.

The chlorination of methane is shown in Figure 8-20. In this reaction, a chlorine atom is substituted for a methane hydrogen.”

	hv = light

	Example. CH4 + Cl2  -> hv - > C(H3)Cl (methyl chloride) + HCl (hydorchloric acid

	Initiation
	In the initiation step, light is shone on the reaction and the radiation is absorbed by the chlorine (Cl2). The light provides enough energy for the married chlorines to divorce — that is, for the chlorine-chlorine bond to break apart to form two chloride radicals, as shown in Figure 8-21. (Recall that free radicals are compounds that contain unpaired electrons.) This kind of bond dissociation is called homolytic cleavage, because the bond breaks symmetrically — one electron “from the bond goes to one side, and the other electron goes to the other side, just as half of the shared property goes to each person in a divorce (theoretically). Note that you use one-headed fishhook arrows to show the movement of only one electron. See Chapter 3 for more on using arrows in organic chemistry.
	 Propagation
	After the reaction has been initiated by forming the chlorine radicals, the reaction proceeds to the propagation steps (see Figure 8-22). A chlorine radical is unstable because the chlorine atom only has seven valence electrons, one electron short of having its valence octet completely full. To fill its valence octet, a chlorine radical then plucks a hydrogen atom (not a proton) from the methane to make hydrochloric acid plus the methyl radical. Now, however, the methyl radical is one electron short of completing its octet. So, the methyl radical then attacks another molecule of chlorine to make chloromethane plus another chlorine radical.
	 Termination.
	“Because this reaction generates chlorine radicals as a byproduct, the reaction is called a chain reaction. In a chain reaction, the reactive species (in this case, the chlorine radical) is regenerated by the reaction. If not for the termination steps, this reaction could theoretically continue until all the starting materials were consumed. Termination steps are reactions that remove the reactive species without generating new ones. Any of the radical couplings shown in Figure 8-23 are considered termination steps because they remove the reactive species (the free radicals) from the reaction without replacing them.

	What about the chlorination of larger molecules that have different kinds of hydrogens? In methane only one kind of hydrogen is available to be pulled off — and so only one possible product can be made — but in larger molecules, several products can be formed. For example, butane (see Figure 8-24) has two types of hydrogen. Hydrogens are classified according to the substitution of the carbon to which they’re attached. Hydrogens attached to primary carbons (or carbons bonded to only one other carbon) are called primary hydrogens, hydrogens attached to secondary carbons (or carbons bonded to two other carbons) are called secondary hydrogens, and so on. Butane has two types of hydrogens — primary hydrogens (1 degree) and secondary hydrogens (2 degrees).

	“The chlorination of butane selectively forms the product that results from the chloride radical abstracting a secondary hydrogen to make the secondary radical, as shown in Figure 8-25.”

	“The bromination of alkanes occurs in the same fashion as the chlorination of alkanes, except that Br2 is used in the reaction instead of Cl2. One difference between the chlorination and bromination of alkanes is that bromide radicals are more selective for hydrogen on more substituted carbons than chloride radicals are.”

	The halogens (/ˈhælədʒən, ˈheɪ-, -loʊ-, -ˌdʒɛn/) are a group in the periodic table consisting of five chemically related elements: fluorine (F), chlorine (Cl), bromine (Br), iodine (I), and astatine (At).

Excerpt From: Arthur Winter. “Organic Chemistry I For Dummies.” iBooks.

	 */
	public function freeRadicalHalogenation(): array;


	public function reactions(): array;


	public function prefix(int $carbonCount);


	/*
		Alkanes have the general molecular formula CnH2n+2
	 */
	public function molecularFormula(int $carbonCount);


	/*
	 For example, decane, with ten carbon atoms, must have (2 3 10) 1 2 5 22 hydrogen atoms and a molecular formula of C10H22.
	 */
	public function hydrogenCount(int $carbonCount);


	public function carbonBondAngle();


}