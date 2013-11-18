<?php

namespace Models;

use Components\Model;

/**
* Users class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Users extends Model
{
	private $table = 'users';

	public function get($id)
	{
		$this->driver->prepare('SELECT * FROM ' . $this->table . ' WHERE id = :id');
		$this->driver->bind(array(':id' => $id));

		return $this->driver->result();
	}
}
