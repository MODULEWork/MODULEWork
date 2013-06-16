<?php

/**
 * MODULEWORK - A modular PHP framwork
 * @package MODULEWork
 * @author ChristianGaertner <christiangaertner.film@googlemail.com>
 */
 
/*
|--------------------------------------------------------------------------
| Register the autoloader
|--------------------------------------------------------------------------
|
| Composer provides an easy way of autoloading classes. We make use of this here,
| This way we do not need to do this all manually. Relaxing...
|
*/

require __DIR__.'/../work/autoload.php';


/*
|--------------------------------------------------------------------------
| Heat up the thing
|--------------------------------------------------------------------------
|
| Let' s get serious and heat up the framwork' s engine.
|
*/

$app = require_once __DIR__.'/../work/launch.php';

/*
|--------------------------------------------------------------------------
| Launch the application
|--------------------------------------------------------------------------
|
| Now we have heaten up the engines and can launch the framework by calling
| the run method of our app.
|
*/

$app->run();

/*
|--------------------------------------------------------------------------
| Cooling the application
|--------------------------------------------------------------------------
|
| Once the request has been processed and lets cool down the engines and
| fire up the last events before shutting down the app.
|
*/

$app->shutdown();