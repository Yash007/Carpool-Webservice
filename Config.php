<?php
	/*
	 * Project Name: Carpool Webservice
	 * Organized and Created by: Yash sompura
	 * License: MIT License
	 * Date: 23 May, 2018
	 * File Name: index.php
	 * Model Class
	 */

	class Config	{
		public function __construct()	{
			define("BASE_URL","");
			define("DB_HOST",'localhost');
			define("DB_USER",'root');
			define("DB_PASSWORD",'root');
			define("DB_NAME",'carpool');
			define("EMAIL",'');
			define("ROOT_FOLDER","../");
			define("DB_PORT",'3306');
		}
	}
?>