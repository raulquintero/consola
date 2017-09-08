<?php 
namespace Core;

use PDO;
class Database {


	private static $db;

	public static function getConnection($dbConfig){

		if (empty(self::$db)) {
			$pdo = new PDO (
				'mysql:host='.$dbConfig['host'].';	dbname='.$dbConfig['dbname'].';  charset=utf8',
				$dbConfig['user'],
				$dbConfig['password']
			);

			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			self::$db = $pdo;
		}


		return self::$db;
	}





}






 