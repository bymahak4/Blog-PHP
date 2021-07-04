<?php
   class database{
	public static function connect(){
		$db = new mysqli("localhost", "root", "", "blogdb");
		$db->query("SET NAMES 'utf8'");
	
		return $db;
	}
}