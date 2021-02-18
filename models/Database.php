<?php

class Database {
	private $host = 'localhost';
	private $user = 'root';
	private $pass = 'root';
	private $dbName = 'cse3101_assignment';

	protected function connect() {
		try {
			$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
			$pdo = new PDO($dsn,$this->user,$this->pass);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $pdo;
		} catch (PDOException $e) {
			error_log($e->getMessage());
			exit('Could not connect to database. Please contact your admin for more info.');
		}
	}
}
