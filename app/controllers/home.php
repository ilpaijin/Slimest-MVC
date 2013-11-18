<?php

namespace Controllers;

use Models\Users;

/**
* Home class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Home extends \Components\Controller
{
	/**
	 * [__construct description]
	 */
	// public function __construct() // <- ioc 
	// {
	// 	parent::__construct();
	// }

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		return $this->view->render();
	}

	/**
	 * [about description]
	 * @return [type] [description]
	 */
	public function about()
	{
		$users = new Users();
		$user = $users->get(1);

		return $this->view
			->with(array('user' => $user))
			->render();
	}
}