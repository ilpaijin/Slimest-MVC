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
	 * [__construct description]
	 */
	public function __construct(){}

	/**
	 * [add description]
	 * @param [type] $route    [description]
	 * @param [type] $callback [description]
	 */
	public function add($route, $callback)
	{
		$this->routes[$route] = $callback;
	}

	/**
	 * [getResponse description]
	 * @param  [type] $request [description]
	 * @return [type]          [description]
	 */
	public function getResponse($request)
	{
		$q = '/'. ltrim($request['QUERY_STRING']);

		if(array_key_exists($q, $this->routes))
		{
			$this->routes[$q] = false === strpos($this->routes[$q], '::') ? $this->routes[$q] . '::index' : $this->routes[$q];

			list($controller, $action) = explode('::', $this->routes[$q]);

			$controller = ucfirst($controller);

			if(class_exists('Controllers\\'.$controller))
			{
				$controllerNs = 'Controllers\\'.$controller;
				$c = new $controllerNs($this->routes[$q]);
				return $c->$action();
			}
		}

		$c = new Controller(null);
		return $c->error();
	}
}