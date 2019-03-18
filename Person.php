<?php 
class Person{
	private $name='';
	private $age='';
	private function __construct(){
		$Db=new PDO("mysql:host=127.0.0.1;charset=utf8");
		return $Db;
	}
}


 ?>