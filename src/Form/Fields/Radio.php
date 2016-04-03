<?php
namespace Laralite\Form\Form\Fields;

use Laralite\Form\Traits\Checkable;

/**
 * Creating radios elements since 1873
 */
class Radio extends Checkable
{
	/**
	 * The current checkable type
	 *
	 * @var string
	 */
	protected $checkable = 'radio';

	////////////////////////////////////////////////////////////////////
	////////////////////////// FIELD METHODS ///////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Create a serie of radios
	 */
	public function radios()
	{
		$this->items(func_get_args());

		return $this;
	}
}
