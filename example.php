<?php
$serverName = "miservidorsqlfbd.database.windows.net";
$connectionOptions = array(
    "Database" => "miBaseDeDatosDeEjemplo",
    "Uid" => "usuarioazure",
    "PWD" => "Manfa8-;"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Error de conexión: " . sqlsrv_errors());
}
?>


