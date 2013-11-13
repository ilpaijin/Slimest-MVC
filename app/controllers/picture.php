<?php

namespace Controllers;

/**
* Picture class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Picture extends \Components\Controller
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
}