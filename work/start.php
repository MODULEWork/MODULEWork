<?php

/*
|--------------------------------------------------------------------------
| Build the application
|--------------------------------------------------------------------------
|
| First of all we need to start the MODULEWork core which will initiate all
| MODULEWork modules and makes them work together perfectly.
|
*/

$app = new MODULEWork\Framework;

$app->rmTrailingSlash();

/*
|--------------------------------------------------------------------------
| Load Paths
|--------------------------------------------------------------------------
|
| Let' s tell our up the pathes to all of our components
|
*/

$app->setPaths(require __DIR__.'/paths.php');