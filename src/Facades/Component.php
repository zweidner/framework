<?php
/**
 * @package    framework
 * @copyright  Copyright 2005-2019 HUBzero Foundation, LLC.
 * @license    http://opensource.org/licenses/MIT MIT
 */

namespace Hubzero\Facades;

/**
 * Component loader facade
 */
class Component extends Facade
{
	/**
	 * Get the registered name.
	 *
	 * @return  string
	 */
	public static function getAccessor()
	{
		return 'component';
	}
}
