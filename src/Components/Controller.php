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
	 * [$response description]
	 * @var [type]
	 */
	private $response;

	/**
	 * [__construct description]
	 * @param [type] $uri [description]
	 */
	public function __construct(Response $response)
	{
		$this->response = $response;
	}

	/**
	 * [with description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function with($data)
	{
		$this->response->addData($data);

		return $this;
	}
}