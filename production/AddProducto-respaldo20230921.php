<?php

session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

 } else {
       header('Location: ../page_403.php?Mensaje=No Existe sesión');

 exit;
 }
 $now = time();
 $expiracion = $_SESSION['expire'];

 // echo "$now";
 // echo "<br>";
 // echo "$expiracion";

 if($now > $_SESSION['expire']) {
 session_destroy();

    header('Location: ../page_403.php?Mensaje=Tiempo Agotado');
 exit;
 }

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "sr1920la";
 $db_name = "Compras3";
 $tbl_name = "Usuarios";
   $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
 }



$username = $_SESSION['username'];


$ObjetoGasto = $_POST['ObjetoGasto'] ;

//echo '<BR> ObjetoGasto:  '.$ObjetoGasto;

$Cantidad = $_POST['Cantidad'];

//echo '<BR>  $Cantidad: '.$Cantidad;

$unidadMedida = $_POST['unidadMedida'] ;

//echo '<BR> unidadMedida :'.$unidadMedida;

$Producto = $_POST['Producto'] ;
//echo ' Producto:'.$Producto;

$idRequi = $_POST['idRequi'] ;
//echo ' idRequi:'.$idRequi;



$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";
$db_name = "Compras3";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}



// genera unidad de medida Leeible  inicio

$sql1="SELECT * FROM catcUnidadesMedida WHERE idcatcUnidadesMedida = $unidadMedida";

$result = $conexion->query($sql1);

if ($result->num_rows > 0)  {}
          
$row = $result->fetch_array(MYSQLI_ASSOC);

$unidadMedidaTraducida = $row['descripcionUnidadMedida'];


// genera unidad de medida Leeible  FIN



// genera Descripcion producto leiible  inicio

$sql2="SELECT * FROM catcProductos WHERE idProducto = $Producto";
// echo  $sql2;
$result = $conexion->query($sql2);

if ($result->num_rows > 0)  {}
          
$row = $result->fetch_array(MYSQLI_ASSOC);

$descripcionProductoRequi = $row['descripcionProducto'];


// enera Descripcion producto leiible  FIN






$sql='
INSERT INTO movdRequisiciones2023(
    idRequisiciones2023,
    idObjetoGasto,
    Cantidad,
    idcatcUnidadesMedida,
    idProducto,
    idRecibido,
    descripcionProductoRequi,
    unidadMedidaTraducida,
    FolioUF,
    Precio
)
VALUES( 
    '.$idRequi.',
    '.$ObjetoGasto.',
    '.$Cantidad.',
    '.$unidadMedida.',
    '.$Producto.',
    0,
    "'.$descripcionProductoRequi.'",
    "'.$unidadMedidaTraducida.'",
    "0-Pendiente",
    0.00


)';








 echo "<br>";
 echo $sql;




 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "sr1920la";
 $db_name = "Compras3";
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
 }

 // se inserta la requisicion en la tabla Requisiciones2023

//  $resultado = $conexion->query($sql);


//echo $sql;
     if ($conexion->query($sql) )
     {


           

           // echo "Correcto";

           
          
          

            header('Location: registroObjetosRequi.php?id='.$idRequi.'#partidas');
     }
     else {
       echo "Error al momento de insertar";
        //header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }
 






  mysqli_close($conexion);







?>
