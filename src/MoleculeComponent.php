<?php
declare(strict_types=1);

namespace kdaviesnz\molecule;


abstract class MoleculeComponent implements IMolecule
{

    protected $molecule;
    protected $atoms = array();

    abstract public function isNucleophile():bool;

    abstract public function isElectrophile():bool;

    abstract public function isChiral():bool;

    abstract public function hasChiralCentre():bool;

    abstract public function getAtoms():array;

    abstract function getResonanceStructures():array;

}