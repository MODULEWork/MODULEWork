<?php namespace MODULEWork\Controller;
if (!defined('BASEPATH')) exit('No direct access!');

/**
* 
*/
class home extends Controller
{

	public function index()
	{
		View::build('home.index')->render();
	}

	public function help()
	{
		View::build('home.help')->render();
	}
}