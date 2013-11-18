<?php

namespace Components;

use Components\Request;
use Components\Router;

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
	public $router;

	/**
	 * [__construct description]
	 * @param [type] $request [description]
	 */
	public function __construct(Request $request = null)
	{
		$this->request = Request::createFromGlobals();
		$this->router = new Router($this);
	}

	/**
	 * [send description]
	 * @return [type] [description]
	 */
	public function send()
	{
		$this->router->getResponse($this->request);
	}
}