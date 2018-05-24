<?php
	/*
	 * Project Name: Carpool Webservice
	 * Organized and Created by: Yash sompura
	 * License: MIT License
	 * Date: 23 May, 2018
	 * File Name: index.php
	 * Controller Class
	 */

	include_once("../Model/UsersModel.php");
	
	class UsersController extends UsersModel	{
		var $method;
		var $action;
		var $userModelObject;
		
		public function __construct($method, $action)	{
			$this->method = $method;
			$this->action = $action;
			$this->userModelObject = new UsersModel();	
		}
		
		public function route()	{
			switch ($this->action)	{
				case "all":
					$this -> userModelObject -> getAllUsers();
					break;
				default:
					echo "Invalid Argument for Action menu";
					break;
			}
		}
		
	}
	
	
	if(isset($_GET['method']) && isset($_GET['action']) && !empty($_GET['method']) && !empty($_GET['action']))	{
		$userControllerObj = new UsersController($_GET['method'],$_GET['action']);
		$userControllerObj -> route(); 
	}
?>