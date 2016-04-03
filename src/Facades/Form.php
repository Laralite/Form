<?php
namespace Laralite\Form\Facades;

use Laralite\Form\FormServiceProvider;
use Illuminate\Support\Facades\Facade;

/**
 * Form facade for the Laravel framework
 */
class Form extends Facade
{
	/**
	 * Get the registered component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		if (!static::$app) {
			static::$app = FormServiceProvider::make();
		}

		return 'form';
	}
}
