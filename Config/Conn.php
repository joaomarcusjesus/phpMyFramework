<?php

namespace Config;

class Conn{

	public static function connect(){
		return new \PDO("mysql:host=localhost;dbname=database_test","root","");
	}
}