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
	include_once("../View/Users.php");
	
	class UsersModel extends Connection	{
		
		var $sql;				//SQL queries will be storing here
		var $connection;		//Connection file Object
		var $statement;			//Statement Will be Queries result
		var $pdo;				// PDO will be connection Object
		var $users;
		
		public function __construct()	{
			$this->connection = new Connection();
			$this->pdo = $this->connection -> connect();
			$this->users = new Users();
		}
		
		public function getAllUsers()	{
			$this->sql = "select * from users";
			$this->statement = $this -> pdo -> query($this->sql);
			
			$result = array();
			foreach ($this->statement as $row)	{
				$temp['uId'] = $row['uId'];
				$temp['uFirstName'] = $row['uFirstName'];
				$temp['uLastName'] = $row['uLastName'];
				$temp['uEmail'] = $row['uEmail'];
				$temp['uPassword'] = $row['uPassword'];
				$temp['uBirthday'] = $row['uBirthday'];
				
				array_push($result, $temp);
			}
			
			$this->users -> getAllUsers(json_encode($result));
			
		}
		
		
		//Function for display Profile as per User
		public function getUserById($id)	{
			$this -> sql = "select * from users where uId=:id";
			$this->statement = $this->pdo -> prepare($this->sql);
			$this->statement -> execute([':id' => $id]);
			
			$result = array();
			foreach ($this->statement as $row)	{
				$temp['uId'] = $row['uId'];
				$temp['uFirstName'] = $row['uFirstName'];
				$temp['uLastName'] = $row['uLastName'];
				$temp['uEmail'] = $row['uEmail'];
				$temp['uPassword'] = $row['uPassword'];
				$temp['uBirthday'] = $row['uBirthday'];
				
				array_push($result, $temp);
			}
			
			$this->users -> getUserById(json_encode($result));
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