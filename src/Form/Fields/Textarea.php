<?php
namespace Laralite\Form\Form\Fields;

use Laralite\Form\Traits\Field;

/**
 * Textarea fields
 */
class Textarea extends Field
{
	/**
	 * The textarea's element
	 *
	 * @var string
	 */
	protected $element = 'textarea';

	/**
	 * The textarea's self-closing state
	 *
	 * @var boolean
	 */
	protected $isSelfClosing = false;
}
