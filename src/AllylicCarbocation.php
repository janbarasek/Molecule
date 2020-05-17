<?php

declare(strict_types=1);

namespace kdaviesnz\molecule;


/**
 * If the carbon bearing the positive charge is immediately adjacent to a carbon-carbon double bond,
 * the carbocation is termed an allylic carbocation. The simplest case (all R = H) is called the allyl carbocation.
 */
class AllylicCarbocation extends Carbocation implements IAllylicCarbocation
{
	public function __construct(MoleculeComponent $molecule)
	{
		parent::__construct($molecule);
	}
}