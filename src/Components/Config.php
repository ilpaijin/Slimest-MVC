<?php

namespace Components;

/**
* Config class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Config 
{
	public static $path = 'Config/';

	public static function get($configfile)
	{
		return require(BASEPATH.'/'.static::$path . $configfile . '.php');
	}
}