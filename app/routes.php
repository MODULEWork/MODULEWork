<?php namespace MODULEWork;
if (!defined('BASEPATH')) exit('No direct access!');

Route::setDefault('home');

Route::get('help', 'home#help');

Route::_404(function() {
	echo "404";
});