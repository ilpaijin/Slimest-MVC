<?php

namespace Components;

/**
* Router class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Router 
{	
	/**
	 * [$routes description]
	 * @var [type]
	 */
	protected $routes;

	/**
	 * [$currentRoute description]
	 * @var [type]
	 */
	public $currentRoute;

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
	}

	/**
	 * [add description]
	 * @param [type] $route    [description]
	 * @param [type] $callback [description]
	 */
	public function add($pattern, $callback)
	{
		$this->routes[$pattern] = new Route($pattern, $callback);
	}

	/**
	 * [prepareRoute description]
	 * @param  [type] $request [description]
	 * @return [type]          [description]
	 */
	public function prepareRoute($request)
	{
		$querystring = '/'. $request->getQueryString();

		if($this->hasRoute($querystring))
		{
			return $this->currentRoute = $this->interpret($querystring);
		}

		return false;
	}

	/**
	 * [hasRoute description]
	 * @param  [type]  $querystring [description]
	 * @return boolean              [description]
	 */
	public function hasRoute($querystring)
	{
		return array_key_exists($querystring, $this->routes);
	}

	/**
	 * [setAction description]
	 * @param [type] $querystring [description]
	 */
	private function interpret($querystring)
	{

		$act = $this->routes[$querystring]->getAction();
		if (is_callable($act))
		{
			return $act($querystring);
		}
		return false === strpos($act, '::') ? $act . '::index' : $act;
	}
}