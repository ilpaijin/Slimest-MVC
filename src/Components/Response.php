<?php

namespace Components;

/**
* Response class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Response 
{
	/**
	 * [$view description]
	 * @var [type]
	 */
	protected $view;

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		$this->view = new View();
	}

	/**
	 * [render description]
	 * @return [type] [description]
	 */
	public function render($validRoute)
	{
		$this->view->render($validRoute);
	}

	/**
	 * [with description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function addData($data)
	{
		$this->view->addData($data);

		return $this;
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