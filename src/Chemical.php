<?php
declare(strict_types = 1); // must be first line

namespace kdaviesnz\molecule;


class Chemical extends IMolecule implements IChemical, IMolecule
{
    private $pubChemId = "";
    private $IUPACName = "";
    private $InChI = "";
    private $InChIKey = "";
    private $CanonicalSMILES = "";
    private $IsomericSMILES = "";
    private $MolecularFormula = "";
    private $MolecularFormulaExpanded = "";
    private $Description;
    private $functionalGroups = null;

    /**
     * Chemical constructor.
     * @param string $pubChemId
     * @param string $IUPACName
     * @param string $InChI
     * @param string $InChIKey
     * @param string $CanonicalSMILES
     * @param string $IsomericSMILES
     * @param string $MolecularFormula
     * @param string $MolecularFormulaExpanded
     * @param $Description
     */
    public function __construct($pubChemId, $IUPACName, $InChI, $InChIKey, $CanonicalSMILES, $IsomericSMILES, $MolecularFormula, $MolecularFormulaExpanded, $Description)
    {
        $this->pubChemId = $pubChemId;
        $this->IUPACName = $IUPACName;
        $this->InChI = $InChI;
        $this->InChIKey = $InChIKey;
        $this->CanonicalSMILES = $CanonicalSMILES;
        $this->IsomericSMILES = $IsomericSMILES;
        $this->MolecularFormula = $MolecularFormula;
        $this->MolecularFormulaExpanded = $MolecularFormulaExpanded;
        $this->Description = $Description;
    }

    /**
     * @return string
     */
    public function getPubChemId()
    {
        return $this->pubChemId;
    }

    /**
     * @return string
     */
    public function getIUPACName()
    {
        return $this->IUPACName;
    }

    /**
     * @return string
     */
    public function getInChI()
    {
        return $this->InChI;
    }

    /**
     * @return string
     */
    public function getInChIKey()
    {
        return $this->InChIKey;
    }

    /**
     * @return string
     */
    public function getCanonicalSMILES()
    {
        return $this->CanonicalSMILES;
    }

    /**
     * @return string
     */
    public function getIsomericSMILES()
    {
        return $this->IsomericSMILES;
    }

    /**
     * @return string
     */
    public function getMolecularFormula()
    {
        return $this->MolecularFormula;
    }

    /**
     * @return string
     */
    public function getMolecularFormulaExpanded()
    {
        return $this->MolecularFormulaExpanded;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    public function getFunctionalGroups($conn)
    {
        if (is_null($this->functionalGroups)) {
            return $this->functionalGroups;
        }

        // First try to get from database

        // Else get the functional groups from
        // the info we have and then save them
        // into the functional_groups table.
        //   $q = "INSERT INTO `functional_groups` (`pubChemId`, `functional_group`) VALUES ('$pubChemIdSafe', '$functionalGroupSafe');";
        //   mysqli_query($conn, $q);


    }

    /**
     * Hydrocarbons contain just hydrogen and carbon.
     * @return mixed
     */
    public function isHydrocarbon():bool
    {
        // Remove numerals from formula.
        // Remove "C" and "H" from formula
        // If we are left with an empty string then we have a hydrocarbon
    }

    /**
     * Hydrocarbon containing just single bonds.
     * @return mixed
     */
    public function isAlkane():bool
    {

        // If we have a hydrocarbon
        //   if SMILE doesnt contain  '=', '#','$','':', '/', '\'
        //      then we have an alkane

    }

    /**
     *  A carbonyl group is a C=O group — in other words, a carbon atom double-bonded to oxygen. A carbonyl group is not considered a functional group in itself; instead, it’s considered a component
     * @return bool
     */
    public function isCarbonyl():bool
    {
        // If the SMILE contains "C=O" then we have a carbonyl
    }

    /**
     * The halides are organic compounds that contain one or more halogens. (Halogens are those elements found in column 7A of the periodic table.)
     * @return mixed
     */
    public function isHalide():bool
    {
        // if not hydrocarbon AND formula contains Fl, Cl, Br, I, At or Uus
        //  then we have a halide
    }

    /**
     * An alkene is a molecule that contains a carbon-carbon double bond.
     * @return bool
     */
    public function hasAlkeneGroup():bool
    {
        // If the SMILE contains "C=C" then we have an alkene group.
    }

    /**
     * Alkynes are molecules that contain a carbon-carbon triple bond.
     * @return bool
     */
    public function hasAlkyneGroup():bool
    {
        // If the SMILE contains "C#C" then we have an alkyne group.
    }

    /**
     * The aromatics (or arenes, as they’re often called) consist of rings containing alternating double bonds. The principal aromatic compound is benzene, a six-carbon ring containing three alternating double bonds.
     * @return bool
     */
    public function hasArmomaticGroup():bool
    {
        // If SMILE contains ":"
        // IF SMILE contains  C1=CC=CC=C1
        // IF SMILE contains c1ccccc1, n1ccccc1 or o1cccc1
        // IF SMILE contains c1ccccc1, n1ccccc1 or o1cccc1
        // IF SMILE contains [nH],  n1c[nH]cc1
        // IF SMILE contains c1ccccc1-c2ccccc2
        // IF SMILE contains c1ccccc1c2ccccc2
        // then we have an aromatic group

    }

    /**
     * Alcohols consist of the general formula R-OH, and have names that end with the suffix –ol.
     * @return bool
     */
    public function hasAlcoholGroup():bool
    {
        // Remove numerals from formula
        // If formula ends in OH then we have an alcohol group
        // Remove "=", "#", "$" from SMILE.
        // If SMILE has branches ending in OH then we have an alcohol group
    }

    /**
     * Thiols are foul-smelling compounds, of the general formula R-SH. Generally, names of thiols end with the suffix –thiol.
     * @return bool
     */
    public function hasThiolGroup():bool
    {
        // Remove numerals from formula
        // If formula ends in OH then we have an alcohol group
        // Remove "=", "#", "$" from SMILE.
        // If SMILE has branches ending in SH then we have an thiol group

    }

    /**
     * Ethers are molecules containing an oxygen sandwiched between two carbons.
     * @return bool
     */
    public function hasEtherGroup():bool
    {
        
    }

    /**
     * In an aldehyde  the carbonyl group is flanked by one hydrogen and one R group. It may be helpful to think of an aldehyde as a carbonyl group at the end of an organic molecule.
     * @return bool
     */
    public function hasAldehydeGroup():bool
    {

    }

    /**
     * Keytones are compounds that contain a carbonyl group sandwiched between two carbons. If an aldehyde can be thought of as a carbonyl at the end of a molecule, then a ketone is a carbonyl somewhere in the middle of a molecule.
     * @return bool
     */
    public function hasKeynoteGroup():bool
    {

    }

    /**
     * The carboxylic acid functional group is made up of a carbonyl group attached to an OH group
     * @return bool
     */
    public function hasCarboxylicAcidGroup():bool
    {

    }

    /**
     * An ester is basically a carboxylic acid with the hydrogen snipped off, and an R group glued in its place.
     * @return bool
     */
    public function hasEsterGroup():bool
    {

    }

    /**
     * Amides are close relatives of esters, except that amides have a nitrogen (rather than an oxygen) next to the carbonyl group.
     * @return bool
     */
    public function hasAmideGroup():bool
    {

    }

    /**
     * Amines are nitrogen atoms that take the place of a carbon atom in an alkane (the three forms of an amine are R-NH2, R2NH, or R3N). Nicotine as well as many other familiar compounds like cocaine, mescaline, amphetamine, and morphine are all amine-containing compounds. Many drugs (both legal and illegal) contain amines that are essential to the drug’s activity.
     * @return bool
     */
    public function hasAmineGroup():bool
    {

    }

    /**
     * Nitriles  are compounds that contain a carbon triply bonded to nitrogen.
     * @return bool
     */
    public function hasNitrileGroup():bool
    {

    }

    /**
     * A methyl group is an alkyl derived from methane, containing one carbon atom bondedto three hydrogen atoms — CH3.
     * @return bool
     */
    public function hasMethylGroup():bool
    {

    }

    /**
     * Methylenedioxy is the term used in the field of chemistry, particularly in organic chemistry, for a functional group with the structural formula R-O-CH2-O-R' which is connected to the rest of a molecule by two chemical bonds.
     * @return bool
     */
    public function hasMethylenedioxyGroup():bool
    {

    }

    /**
     * In organic chemistry, a methylene bridge, methylene spacer, or methanediyl group is any part of a molecule with formula -CH
     * @return bool
     */
    public function hasMethanediylGroup():bool
    {

    }

    /**
     * In organic chemistry, the phenyl group or phenyl ring is a cyclic group of atoms with the formula C6H5. Phenyl groups are closely related to benzene and can be viewed as a benzene ring, minus a hydrogen,which maybe replaced my some other element or compound to serve as a functional group.
     * @return bool
     */
    public function hasPhenylGroup():bool
    {

    }

    /**
     * Amphetamines are a group of synthetic psychoactive drugs called central nervous system (CNS) stimulants.1The collective group of amphetamines includes amphetamine, dextroamphetamine, and methamphetamine.2 Amphetamine is made up of two distinct compounds: pure dextroamphetamine and pure levoamphetamine.
     * @return bool
     */
    public function isAmphetmine():bool
    {

    }
}