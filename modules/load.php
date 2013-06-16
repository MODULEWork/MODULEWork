<?php
namespace MODULEWork;
/*===================================================
*
*
*
* Name: LOADWork
* Version: 1.0
* License: Apache 2.0
* Author: Christian Gärtner
* Author URL: http://christiangaertner.github.io
* Project URL: https://github.com/ChristianGaertner/MODULEWork
* Description: A basic loader class for php
*
*
*
===================================================*/


/**
* Load
* @author ChristianGaertner <christiangaertner.film@googlemail.com>
*/
class Load {

	protected static $path;

	public static function init($path=null)
	{
		if ($path != null) {
			$path = static::$path;
		} else {
			static::$path = array();
			static::$path['model'] = APPPATH . 'models/';

		}
	}

	/**
	 * Load a model
	 * @param  string $name The name of the model
	 * @return Object       The object for the model
	 */
	public static function model($name)
	{
		if (strpos($name, '.')) {
			$name = str_replace('.', DIRECTORY_SEPARATOR, $name);
		}

		if (is_file(static::$path['model'] . $name)) {
			include static::$path['model'] . $name;
			$name = explode(DIRECTORY_SEPARATOR, $name);
			$name = array_pop($name);
			return new $name;
		}
	}

}