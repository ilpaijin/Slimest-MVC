<?php

namespace Components;

/**
* Application class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Application 
{	
	/**
	 * [$request description]
	 * @var [type]
	 */
	private $request;

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
		$this->request = $request?: static::onRequest();
		$this->router = new Router();
	}

	/**
	 * [onRequest description]
	 * @return [type] [description]
	 */
	public static function onRequest()
	{
		return $_SERVER;
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