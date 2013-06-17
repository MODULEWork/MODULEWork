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

$app = new MODULEWork\Framework\Application;

$app->rmTrailingSlash();

/*
|--------------------------------------------------------------------------
| Load Paths
|--------------------------------------------------------------------------
|
| Let' s tell our up the pathes to all of our components
|
*/

$app->setPaths(require __DIR__.'/../paths.php');

/*
|--------------------------------------------------------------------------
| Return the app
|--------------------------------------------------------------------------
|
| In order to run the app from elsewhere we have to return the instance of
| our app.
|
*/

return $app;