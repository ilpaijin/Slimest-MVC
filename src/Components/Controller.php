<?php

namespace Components;


/**
* Controller class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Controller 
{
	/**
	 * [$view description]
	 * @var [type]
	 */
	protected $view;

	/**
	 * [__construct description]
	 * @param [type] $uri [description]
	 */
	public function __construct($uri)
	{
		$this->view = new View($uri);
	}

	/**
	 * [error description]
	 * @return [type] [description]
	 */
	public function error()
	{
		return $this->view->error();
	}
}