<?php namespace MODULEWork\Framework;
/**
* The main app class
*/
class Application
{
	private $pathes;

	public function rmTrailingSlash()
	{
	}

	public function setPaths($pathes = array())
	{
		$this->pathes = $pathes;
	}

	public function run()
	{
		\MODULEWork\Router::init();
	}

	public function shutdown()
	{
	}
}