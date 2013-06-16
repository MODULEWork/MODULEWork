<?php namespace MODULEWork;
if (!defined('BASEPATH')) exit('No direct access!');

/**
* Basic Controller
*/
class CONTROLLERWork
{
	/**
	 * Are the methods RESTful prefixd?
	 * <code><REST>_<methodname></code>
	 * For example the following method will only responde to GET requests
	 * <code>get_home()</code>
	 * false by default
	 * @var boolean
	 */
	public $rest;
}

/**
* Advanced controller
*/
class Controller extends CONTROLLERWork
{
	public static function get($name)
	{
		return new $name();
	}
}