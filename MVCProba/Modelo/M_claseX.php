<?php
/**
 * Clase X con la crear los datos que deseamos meter en la BD
 */
		class ClaseX{

			var $c1;
			var $c2;

/**
 * Constructor para inicializar los objetos
 * @param $campo1 
 */
			public function __construct($c1,$c2){

				$this->c1=$campo1;
				$this->c2=$c2;

			}

			function ALTA_BD(){
				$obxcon=new Conexion();
				$query="insert into taboa1 values($this->c1,'$this->c2')";
				$obxcon->con->query($query);
				$obxcon->con->close();
			}


			static function VER_T(){

				$obxcon=new Conexion();

				$query=$obxcon->con->query('select * from taboa1');

				$result=array();

				$i=0;
				while ($fila=$query->fetch_assoc()) {

					$result[$i]=$fila;
					$i++;
				}
				$obxcon->con->close();
				return $result;
			}
		}

?>