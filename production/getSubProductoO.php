<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";
$db_name = "Compras3";
$tbl_name = "Usuarios";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


	$ObjetoGasto = $_POST['ObjetoGasto'];
	$Licitacion = $_POST['Licitacion'];

  echo $ObjetoGasto;
  echo $Licitacion;

// $sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto'";

switch ($Licitacion) {

	case '2':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 2  ORDER BY descripcionProducto ";
	  break;

	case '3':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 3 ORDER BY descripcionProducto ";
	  break;

	case '4':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 4 ORDER BY descripcionProducto ";
	  break;

	  case '5':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 5  ORDER BY descripcionProducto  ";
	  break;

	  case '6':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 6 ORDER BY descripcionProducto ";
	  break;

	  case '7':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 7 ORDER BY descripcionProducto ";
	  break;

	  case '8':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 8  ORDER BY descripcionProducto ";
	  break;

	  case '9':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 9 ORDER BY descripcionProducto ";
	  break;

	  case '10':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 10 ORDER BY descripcionProducto ";
	  break;

	  case '11':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 11 ORDER BY descripcionProducto ";
	  break;

	  case '12':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 12 ORDER BY descripcionProducto  ";
	  break;

	  case '13':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 13 ORDER BY descripcionProducto  ";
	  break;

	  case '14':
		$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 14 ORDER BY descripcionProducto ";
	  break;

	default:
	$sql = "SELECT * FROM catcProductos WHERE idObjetoGasto = '$ObjetoGasto' AND idLicitacion = 0 AND Activo <> 0 ORDER BY descripcionProducto";
	  break;
  }


$result = $conexion->query($sql);





	$html= "<option value='0'>Seleccionar Producto</option>";

	while($rowM = $result->fetch_assoc())
	{
		$html.= "<option value='".$rowM['idProducto']."'>".$rowM['descripcionProducto']."</option>";
	}

	echo $html;
?>
