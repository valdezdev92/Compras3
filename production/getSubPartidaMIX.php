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

 $sql = "SELECT * FROM Requisiciones2023 a  INNER JOIN movdRequisiciones2023 b on a.idRequisiciones2023 = b.idRequisiciones2023  WHERE a.idRequisiciones2023 = '$ObjetoGasto'";


   

$result = $conexion->query($sql);





	$html= "<option value='0'>Seleccionar Producto</option>";

	while($rowM = $result->fetch_assoc())
	{
		$html.= "<option value='".$rowM['idmovdRequisiciones2023']."'>".$rowM['descripcionProductoRequi']."</option>";
	}

	echo $html;
?>
