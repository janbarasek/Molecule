<?php

namespace kdaviesnz\molecule;

use kdaviesnz\atom\IAtom;

interface IAlkene
{

    public function getCarbonAtomWithDoubleBond():IAtom;

    /*
 The most characteristic reaction of alkenes is addition to the carbon-carbon dou- ble bond in such a way that the p bond is broken and, in its place, s bonds form to two new atoms or groups of atoms. Table 6.1 gives several examples of reactions at a carbon-carbon double bond along with the descriptive name(s) associated with each. Some of these reactions are treated separately under oxidations (Section 6.5) and reductions (Section 6.6), but are included in this table because they are formally additions.
 */
    /*
     alkene + HX (X=halogen) -> Single carbon-carbon bond, X bonded to a C, H bonded to other C.

The hydrogen halides HCl, HBr, and HI add to alkenes to give haloalkanes (alkyl halides). These additions may be carried out either with the pure reagents (neat) or in the presence of a polar solvent such as acetic acid. HCl reacts sluggishly compared to the other two acids. Addition of HBr to ethylene gives bromoethane (ethyl bromide).


    Organic Chemistry 8th edition
     */
    public function hydrogenation(IHydrogenHalide $hydrogenHalide): IMolecule;

    /*
    alkene + H2O + acid catalyst (eg sufuric acid) -> As above but with (OH) bonded to a C.
     */
    public function hydration(ICatalyst $sulfuricAcidCatalyst): IAlcohol;

    /*
     alkene + X2 -> As above but with X bonded to C and X bonded to other C.
     */
    public function halogenation(): IMolecule;

    /*
     alkene + X2 + H20 -> As above but with X bonded to C and (OH) bonded to other C.
    */
    public function halohydrinformation(): IAlcohol;

    /*
     alkene + Hg(OAc)2 + H2O -> As above but with HO bonded to C and HgOAc bonded to other C.
     */
    public function oxymercuration(): IAlcohol;

    /*
     alkene + BH3 -> As above but with HO bonded to C and BH2 bonded to other C.
     */
    public function hydroboration():IAlcohol;

    /*
     alkene + OsO4 -> As above but with HO bonded to C and HO bonded to other C.
     */
    public function oxidation():IAlcohol;

    /*
     alkene + H2 + transition metal catalyst eg Pd -> As above but with H bonded to C and H bonded to other C.
     */
    public function reduction():IAlkane;

    /*
     In chemistry, pi bonds (π bonds) are covalent chemical bonds where two lobes of an orbital on one atom overlap two lobes of an orbital on another atom. Each of these atomic orbitals is zero at a shared nodal plane, passing through the two bonded nuclei. The same plane is also a nodal plane for the molecular orbital of the pi bond.

    In chemistry, sigma bonds (σ bonds) are the strongest type of covalent chemical bond. They are formed by head-on overlapping between atomic orbitals. Sigma bonding is most simply defined for diatomic molecules using the language and tools of symmetry groups.
     */

}

