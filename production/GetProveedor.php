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


	$NoProveedor = $_POST['NoProveedor'];





$sql = 'SELECT * FROM CatcProveedores WHERE RazonSocial LIKE "%'.$NoProveedor.'%"';

echo $sql;

$result = $conexion->query($sql);







	while($rowM = $result->fetch_assoc())
	{
		$html.= "<option value='".$rowM['Cve_Proveedor']."'   >".$rowM['Cve_Proveedor'].' - '.$rowM['RazonSocial']."</option>";
	}

	echo $html;
?>
