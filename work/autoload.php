<?php
/*
|--------------------------------------------------------------------------
| Register the autoloader
|--------------------------------------------------------------------------
|
| Composer provides an easy way of autoloading classes. We make use of this here,
| This way we do not need to do this all manually. Relaxing...
|
*/

require __DIR__.'/../vendor/autoload.php';


/*
|--------------------------------------------------------------------------
| Our own, independent autoloader
|--------------------------------------------------------------------------
|
| If we add new models we don' t want to dump the composer autoload everytime
| This will take care of loading the last few files
|
*/

MODULEWork\Framework\Extra\ClassLoader::register();