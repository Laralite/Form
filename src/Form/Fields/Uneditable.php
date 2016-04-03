<?php
namespace Laralite\Form\Form\Fields;

use Laralite\Form\Traits\Field;

/**
 * Uneditable and disabled fields
 */
class Uneditable extends Field
{

	////////////////////////////////////////////////////////////////////
	/////////////////////////// CORE METHODS ///////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Prints out the current tag
	 *
	 * @return string An uneditable input tag
	 */
	public function render()
	{
		$this->addClass($this->app['form.framework']->getUneditableClasses());

		$this->setId();

		return $this->app['form.framework']->createDisabledField($this);
	}
}
