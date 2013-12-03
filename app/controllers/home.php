<?php

namespace Controllers;

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
	public function __construct(\Models\Users $users) // <- ioc 
	{
		$this->users = $users;
	}

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{

	}

	/**
	 * [about description]
	 * @return [type] [description]
	 */
	public function about()
	{
		$user = $this->users->get(1);

		return $this
			->with(array('user' => $user))
			->render();
	}
}