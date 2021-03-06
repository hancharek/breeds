<?php
namespace App\Helpers;

use Illuminate\Database\Capsule\Manager;

class ConnectionHelper 
{
	/**
	* This function veriry the database connection to prevent errors in some places
	* @param Interop\Container\ContainerInterface	container
	* @return bool
	*/
	public static function hasDatabaseConnection(Manager $db) : bool
	{
		try {
			$pdo = $db::connection()->getPdo();
			return true;
		} catch (\Exception $e) {
			return false;
		}
	}
}