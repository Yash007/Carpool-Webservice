<?php
	/*
	 * Project Name: Carpool Webservice
	 * Organized and Created by: Yash sompura
	 * License: MIT License
	 * Date: 23 May, 2018
	 * File Name: index.php
	 * Model Class
	 */
	
	include_once("Connection.php");
	class Users extends Connection	{
		
		var $sql;
		var $connection;
		public function __construct()	{
			$this->connection = new Connection();
			$this->connection -> connect();
		}
	}
	$users = new Users();
	
	
?>