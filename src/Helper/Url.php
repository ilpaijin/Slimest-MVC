<?php

namespace Helper;

/**
* Url class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Url 
{
	/**
	 * [base description]
	 * @return [type] [description]
	 */
	public static function base()
	{
		$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://';
		return $protocol.$_SERVER['HTTP_HOST'].dirname(dirname($_SERVER['SCRIPT_NAME']));
	}

	/**
	 * [assets description]
	 * @param  [type] $target [description]
	 * @return [type]         [description]
	 */
	public static function assets($target = null)
	{
		return static::base() . '/public/'. $target;
	}

	/**
	 * [is description]
	 * @param  [type]  $pattern [description]
	 * @return boolean          [description]
	 */
	public static function is($pattern)
	{
		$q = '/'. ltrim($_SERVER['QUERY_STRING']);
		return $pattern === $q;
	}
}