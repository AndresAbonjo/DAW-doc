<?php
	/**
 * Archivo para la gestión de la Clase X.
 *
 * Este archivo incluye la conexión a la base de datos, la definición de la Clase X
 * y el manejo de sus métodos.
 *
 * @package Modelo
 */

// Se requiere el archivo de conexión a la base de datos

require ('Modelo/conexion.php');

// Se requiere el archivo de la clase ClaseX

require ('Modelo/M_claseX.php');

// Se definen valores para los parámetros de la clase ClaseX
	$c1=100;
	$c2="abc";

// Se instancia un objeto de la clase ClaseX con los valores proporcionados
	$obX=new ClaseX($c1,$c2);

// Se llama al método ALTA_BD() de la clase ClaseX para realizar una operación de alta en la base de datos
	$obX->ALTA_BD();


// Se llama al método estático VER_T() de la clase ClaseX para obtener datos de la base de datos
	$datos=ClaseX::VER_T();

// Se incluye el archivo de la vista V_claseX.php para mostrar los datos obtenidos
	require('Vista/V_claseX.php');
?>