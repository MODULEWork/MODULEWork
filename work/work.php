<?php namespace MODULEWork;
if (!defined('BASEPATH')) exit('No direct access!');

// Include all modules
foreach (glob(MODULEPATH . '*.php') as $module) {
    require $module;
    $modules[] = $module; 
}



if (class_exists('MODULEWork\Route')) {
	Route::tar();
} else {
	throw new \Exception('MISSING MODULE: Router', 1);
}

if (!class_exists('MODULEWork\Controller')) {
	throw new \Exception('MISSING MODULE: Controller', 1);
}

// Init all modules
foreach ($modules as $module) {
	$module = ucfirst($module);
	if (class_exists('MODULEWork\\' . $module) && method_exists('MODULEWork\\' . $module, 'init')) {
		$module::init();
	}
}

// Include all controllers
foreach (glob(APPPATH . 'controllers/*.php') as $controller) {
    include $controller;
}

require APPPATH . 'routes.php';
