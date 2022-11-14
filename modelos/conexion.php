<?php 
class Conexion{
	static public function conectar(){
		$link =new PDO("mysql:host=localhost; dbname=u216294325_stock", "u216294325_stock", "Re.15120633984543");
		$link->exec("set names utf8");
		return $link;
	}
}