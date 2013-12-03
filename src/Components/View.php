<?php

namespace Components;

/**
* View class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class View 
{
	/**
	 * [$template description]
	 * @var [type]
	 */
	public $template;

	/**
	 * [$content description]
	 * @var [type]
	 */
	protected $content;

	/**
	 * [$data description]
	 * @var array
	 */
	private $data = array();

	/**
	 * [__construct description]
	 * @param [type] $route [description]
	 */
	public function __construct()
	{
		$this->template = 'default';
	}

	/**
	 * [render description]
	 * @param  [type] $view [description]
	 * @return [type]       [description]
	 */
	public function render($route = null)
	{
		extract($this->data);
		
		ob_start();

		list($view, $file) = explode('::', $route);

		if($view && isset($file))
		{
			include __DIR__.'/../../app/views/'.$view.'/'.$file.'.php';
		} else if($view && !isset($file))
		{
			include __DIR__.'/../../app/views/'.$view.'/index.php';
		} else 
		{
			include __DIR__.'/../../app/views/error/index.php';
		}

		$content = ob_get_clean();

		ob_start();

		include __DIR__.'/../Templates/'.$this->template.'.php';

		return ob_get_contents();
	}

	/**
	 * [with description]
	 * @param  array  $data [description]
	 * @return [type]       [description]
	 */
	public function addData($data = array())
	{
		$this->data = array_merge($this->data, $data); 
	}

	/**
	 * [error description]
	 * @return [type] [description]
	 */
	public function error()
	{
		return $this->render('error', array());
	}
}