<?php namespace Configuration;

class Database {

	private static $instance = NULL;
	private function __construct(){}

	public static function GetInstance() {

		$host = 'localhost';
		$dbname = '4hire';
		$username = 'root';
		$password = '';

		if (!isset($instance)) {			
			$instance = mysqli_connect($host, $username, $password, $dbname);			
			if (mysqli_connect_errno()) {			
				echo "[FAILED] Cannot connect to MySQL: " . mysqli_connect_error();			
			} else {	
				//Do nothing.
			}
		}		
		
		return $instance;	
	}
 }
   
?>