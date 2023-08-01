<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="sr1920la";
			$bd="Compras3";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

        

 ?>