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
	 * [$app description]
	 * @var [type]
	 */
	private $app;

	/**
	 * [$routes description]
	 * @var [type]
	 */
	protected $routes;

	/**
	 * [$currentRoute description]
	 * @var [type]
	 */
	protected $currentRoute;

	/**
	 * [__construct description]
	 */
	public function __construct($app)
	{
		$this->app = $app;
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
	 * [getResponse description]
	 * @param  [type] $request [description]
	 * @return [type]          [description]
	 */
	public function getResponse($request)
	{
		$querystring = '/'. ltrim($this->app->request->getQueryString());

		if($this->hasRoute($querystring))
		{
			$this->currentRoute = $this->prepare($querystring);

			list($controller, $action) = explode('::', $this->currentRoute);

			$controller = ucfirst($controller);

			if(class_exists('Controllers\\'.$controller))
			{
				$controllerNs = 'Controllers\\'.$controller;
				$c = new $controllerNs($this->currentRoute);
				
				return $c->$action();
			}
		}

		$c = new Controller(null);
		return $c->error();
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
	private function prepare($querystring)
	{
		$act = $this->routes[$querystring]->getAction();
		return false === strpos($act, '::') ? $act . '::index' : $act;
	}
}