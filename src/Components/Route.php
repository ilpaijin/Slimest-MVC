<?php

namespace Components;

/**
* Route class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Route
{
	/**
	 * [$pattern description]
	 * @var [type]
	 */
	private $pattern;

	/**
	 * [$action description]
	 * @var [type]
	 */
	private $action;

	/**
	 * [__construct description]
	 * @param [type] $pattern   [description]
	 * @param [type] $action [description]
	 */
	public function __construct($pattern, $action)
	{
		$this->pattern = $pattern;
		$this->action = $action;
	}

	public function getAction()
	{
		return $this->action;
	}
}