<?php 

	class Conexion{

		static public function conectar(){

			$link = new PDO("mysql:host=localhost;dbname=hnsr",
							"hnsr",
							"hnsr2020");

			$link -> exec("set names utf8");

			return $link;


		}
	}


 ?>