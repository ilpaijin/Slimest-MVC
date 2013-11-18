<?php

namespace Components;

use Components\Database\Db;

/**
* Model class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Model 
{
	protected $driver;

	public function __construct($driver = null)
	{
		$this->driver = $this->setDriver($driver);
	}

	public function setDriver($driver)
	{
		return $driver ?: new Db();
	}
}