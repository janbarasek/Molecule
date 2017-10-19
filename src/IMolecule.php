<?php

namespace kdaviesnz\chemistry;


interface IMolecule
{

    public function isNucleophile():bool;

    public function isElectrophile():bool;

    public function isChiral():bool;

    public function hasChiralCentre():bool;

}