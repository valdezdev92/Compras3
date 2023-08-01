<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";
$db_name = "Compras";
$tbl_name = "Usuarios";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


	$Cuenta = $_POST['Cuenta'];

  echo $Cuenta;

$sql = "SELECT * FROM SubCuentas WHERE Cuenta = '$Cuenta'";

$result = $conexion->query($sql);





	$html= "<option value='0'>Seleccionar SubCuenta</option>";

	while($rowM = $result->fetch_assoc())
	{
		$html.= "<option value='".$rowM['SubCuenta']."'>".$rowM['SubCuenta'].' - '.$rowM['Descripcion']."</option>";
	}

	echo $html;
?>
