<?php
namespace Laralite\Form\Form\Fields;

use Laralite\Form\Traits\Field;

/**
 * Renders Plain Text Control
 */
class Plaintext extends Field
{
	////////////////////////////////////////////////////////////////////
	/////////////////////////// CORE METHODS ///////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Prints out the current tag
	 *
	 * @return string A plain text tag
	 */
	public function render()
	{
		$this->addClass($this->app['form.framework']->getPlainTextClasses());
		$this->setId();

		return $this->app['form.framework']->createPlainTextField($this);
	}
}
