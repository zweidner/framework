<?php
/**
 * @package    framework
 * @copyright  Copyright 2005-2019 HUBzero Foundation, LLC.
 * @license    http://opensource.org/licenses/MIT MIT
 */

namespace Hubzero\Document\Type\Feed;

use Hubzero\Base\Obj;

/**
 * Enclosure is an internal class that stores feed enclosure information
 *
 * Inspired by Joomla's JFeedEnclosure class
 */
class Enclosure extends Obj
{
	/**
	 * URL enclosure element
	 *
	 * @var	 string
	 */
	public $url = '';

	/**
	 * Length enclosure element
	 *
	 * @var	 string
	 */
	public $length = '';

	/**
	 * Type enclosure element
	 *
	 * @var	 string
	 */
	public $type = '';
}
