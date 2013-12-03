<?php

namespace Components;

use Components\Request;
use Components\Response;

/**
* Application class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Application 
{	
	const VERSION = '0.1.0';

	/**
	 * [$request description]
	 * @var [type]
	 */
	public $request;

	/**
	 * [$router description]
	 * @var [type]
	 */
	public $response;

	/**
	 * [$router description]
	 * @var [type]
	 */
	public $router;

	/**
	 * [__construct description]
	 * @param [type] $request [description]
	 */
	public function __construct()
	{
		$this->request = Request::createFromGlobals();
		$this->router = new Router;
		$this->response = new Response();
	}

	/**
	 * [send description]
	 * @return [type] [description]
	 */
	public function run()
	{
		$validRoute = $this->router->prepareRoute($this->request);

		if(!$validRoute)
		{
			return $this->response->error();
		}

		list($controller, $action) = explode('::', $validRoute);

		$controller = ucfirst($controller);

		if(class_exists('Controllers\\'.$controller))
		{
			$controllerNs = 'Controllers\\'.$controller;

			$reflection = new \ReflectionClass($controllerNs);

			$dependencies = $this->getDependencies($reflection);

			$c = $reflection->newInstanceArgs($dependencies);

			$methodCalled = $c->$action();

			var_dump($methodCalled); exit;

			$this->response->render($validRoute);
		}
	}

	/**
	 * [getDependencies description]
	 * @param  [type] $class [description]
	 * @return [type]        [description]
	 */
	private function getDependencies($class)
	{
		$constructor = $class->getConstructor();

		$parameters = $constructor->getParameters();

		$dependencies = array();

		if($parameters)
		{
			foreach($parameters AS $parameter)
			{
				$depClass = $parameter->getClass()->name;
				$dependencies[] = new $depClass();
			}
		}
	
		return (array) $dependencies;
	}
}