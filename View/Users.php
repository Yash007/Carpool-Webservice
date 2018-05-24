<?php
	/*
	 * Project Name: Carpool Webservice
	 * Organized and Created by: Yash sompura
	 * License: MIT License
	 * Date: 23 May, 2018
	 * File Name: Users.php
	 * View Class
	 */

	include_once("Rest.php");
	class Users	{
		
		var $rest;
		public function __construct()	{
			$this->rest = new Rest(); 		
		}
		
		public function getAllUsers($result)	{
			$this->rest->setHTTPHeaders("Application/json",200);
			print $result;
		}
	}
?>