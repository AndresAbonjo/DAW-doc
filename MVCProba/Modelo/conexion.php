<?php
/**
 * Clase para establecer la conexión con la BD
 * 
 */
	class Conexion{	
		public $con;
	
/**
 * Método que establece la conexión con la BD mvc1, con usuario root en un servidor local
 */
		public function __construct(){

			$this->con=new mysqli('localhost','root','','mvc1');


		}

	}	

?>