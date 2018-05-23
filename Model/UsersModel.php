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
	class UsersModel extends Connection	{
		
		var $sql;
		var $connection;
		public function __construct()	{
			$this->connection = new Connection();
			$this->connection -> connect();
		}
		
		public function getAllUsers()	{
			
		}
		
		
		//Function for display Profile as per User
		public function getUserById()	{
			
		}
		
		
		//Function for user login
		public function postUserLogin()	{
			
		}
		
		//function for Reset password for user account
		public function postUserResetPassword()	{
			
		}
		
		
		//Function for sign up new user
		public function postUserSignUp()	{
			
		}
		
		
		//Function for encrypt password
		public function encryptPassword()	{
			
		}
	}
	$users = new UsersModel();
	
	
?>