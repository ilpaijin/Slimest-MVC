<?php

namespace Components;

/**
* Model class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Model 
{
	/**
	 * [$data description]
	 * @var [type]
	 */
	protected $data;

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		$this->data = 'dati model';
		return $this->data;
	}

	/**
	 * [getData description]
	 * @return [type] [description]
	 */
	public function getData()
	{
		return $this->data;
	}
}