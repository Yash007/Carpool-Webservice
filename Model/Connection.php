<?php

	/*
	 * Project Name: Carpool Webservice
	 * Organized and Created by: Yash sompura
	 * License: MIT License
	 * Date: 23 May, 2018
	 * File Name: Connection.php
	 */

	include_once("../Config.php");
	class Connection	{
		var $config;
		var $dbHost;
		var $dbName;
		var $dbUserName;
		var $dbPassword;
		var $pdo;
		var $dsn;
		
		public function __construct()	{
			$this->config = new Config();
			$this->dbHost = DB_HOST;
			$this->dbName = DB_NAME;
			$this->dbUserName = DB_USER;
			$this->dbPassword = DB_PASSWORD;
			$this->dsn = "mysql:host=".$this->dbHost.";dbname=".$this->dbName;
		}
		
		public function connect()	{
			try	{
				$this->pdo = new PDO($this->dsn,$this->dbUserName,$this->dbPassword);
				echo "Connected";
			}
			catch (PDOException $e)	{
				echo ($e->getMessage());
				exit(0);
			}
		}
	}
?>