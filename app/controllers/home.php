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
		return $this->view->render();
	}
}