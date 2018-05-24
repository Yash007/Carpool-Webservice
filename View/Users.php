<?php
	/*
	 * Project Name: Carpool Webservice
	 * Organized and Created by: Yash sompura
	 * License: MIT License
	 * Date: 23 May, 2018
	 * File Name: Users.php
	 * View Class
	 */

	class Users	{
		
		public function __construct()	{
				
		}
		
		public function getAllUsers($result)	{
			header("Content-type:Application/json");
			print json_encode($result);
		}
	}
?>