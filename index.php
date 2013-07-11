<?php

/**
 * MODULEWORK - A modular PHP framwork
 * @package MODULEWork
 * @author ChristianGaertner <christiangaertner.film@googlemail.com>
 * @version 1.0 Mirco
 */


/*
|--------------------------------------------------------------------------
| Lets start a measurement for the request.
|--------------------------------------------------------------------------
|
| This global define can get very helpful if we want to measure the exec-time
| of our app. Will be used in the TIMEModule.
|
*/

define('MODULEWORK_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Define basic pathes
|--------------------------------------------------------------------------
|
| Lets create some defines for the App 
|
*/
define('BASEPATH', dirname(realpath(__FILE__)));
define('APPPATH', BASEPATH . '/app/');
define('MODULEPATH', BASEPATH . '/modules/');


/*
|--------------------------------------------------------------------------
| Heat up the thing
|--------------------------------------------------------------------------
|
| Let' s get serious and heat up the framwork' s engine.
|
*/

require_once BASEPATH . '/work/work.php';