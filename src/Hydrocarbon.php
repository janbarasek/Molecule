<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\molecule;

class Hydrocarbon extends FunctionalGroup implements IHydrocarbon
{
    public function reactions(): array
    {
        return array();
    }

}