<?php

namespace Components\Database;

use PDO;
use Config;

/**
* Db class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Db 
{
	/**
	 * [$dbh description]
	 * @var [type]
	 */
	private $dbh;

	/**
	 * [$stmt description]
	 * @var [type]
	 */
	private $stmt;

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		$cfg = Config::get('db');

		try {
			$this->dbh = new PDO('mysql:host='.$cfg['host'].';dbname='.$cfg['dbname'], $cfg['user'], $cfg['password']);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch( \PDOException $e)
		{
			return $e->getMessage();
		}
	}

	/**
	 * [prepare description]
	 * @param  [type] $sql [description]
	 * @return [type]      [description]
	 */
	public function prepare($sql)
	{
		$this->stmt = $this->dbh->prepare($sql);
	}

	/**
	 * [execute description]
	 * @return [type] [description]
	 */
	public function execute()
	{
		return $this->stmt->execute();
	}

	/**
	 * [bind description]
	 * @param  array  $params [description]
	 * @return [type]         [description]
	 */
	public function bind( array $params )
	{
		foreach($params AS $id => $value)
		{
			$this->stmt->bindValue($id, $value);
		}
	}

	public function result()
	{
		$this->execute();
		
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
}