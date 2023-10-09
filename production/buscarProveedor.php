<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";
$db_name = "Compras3";
//$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
// Conexión a la base de datos
$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

// Validar la conexión
if (mysqli_connect_errno()) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}

// Recuperar el término de búsqueda del usuario
$termino = $_GET['termino'];

// Consulta SQL para buscar productos que coincidan con el término de búsqueda
$sql = "SELECT RazonSocial FROM CatcProveedores WHERE RazonSocial LIKE '%$termino%'";
$resultado = mysqli_query($conexion, $sql);

// Crear un array para almacenar los resultados
$resultados = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $resultados[] = $fila['RazonSocial'];
}

// Devolver los resultados como JSON
echo json_encode($resultados);

// Cerrar la conexión
mysqli_close($conexion);
?>
