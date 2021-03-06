<?php
/**
 * @package    framework
 * @copyright  Copyright 2005-2019 HUBzero Foundation, LLC.
 * @license    http://opensource.org/licenses/MIT MIT
 */

namespace Hubzero\Base\Client;

/**
 * Files client
 */
class Files implements ClientInterface
{
	/**
	 * ID
	 *
	 * @var  integer
	 */
	public $id = 2;

	/**
	 * Name
	 *
	 * @var  string
	 */
	public $name = 'files';

	/**
	 * A url to init this client.
	 *
	 * @var  string
	 */
	public $url = 'files';
}
