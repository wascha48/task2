<?php

class Db
{
	// Подключение к базе данных
	
	public static function getConnection()
	{
		
		$paramsPath = ROOT . '/config/db_config.php';
		$params = include($paramsPath);

		$dsn = "mysql:host={$params['host']}; dbname={$params['dbname']}";
		$db  = new PDO($dsn, $params['user'], $params['password'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		
		return $db;
		
	}

}