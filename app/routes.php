<?php
if (!defined('BASEPATH')) exit('No direct access!');

use MOUDLEWork\Route;


Route::get('/', function() {
	return View::build('home.index');
});

Route::get('help', function() {
	return View::build('home.help');
});

Route::_404(function() {
	echo "404";
});