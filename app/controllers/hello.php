<?php

namespace Controllers;

/**
* Hello class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Hello extends \Components\Controller
{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		return $this->view->with(array(
			'name' => 'ilpaijin',
			'dog' => 'baby', 
			))
			->render();
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