<?php
declare(strict_types=1);

namespace kdaviesnz\molecule;

use kdaviesnz\atom\IAtom;

class AlkeneFactory extends Factory
{
    private $molecule;

    /**
     * AlkeneFactory constructor.
     * @param $molecule
     */
    public function __construct(IAtom...$atoms)
    {
        $this->factoryMethod(...$atoms);
    }


    protected function factoryMethod(IAtom...$atoms)
    {
        $this->molecule = new Molecule(...$atoms);
        $this->molecule = new Alkene($this->molecule);
    }

}