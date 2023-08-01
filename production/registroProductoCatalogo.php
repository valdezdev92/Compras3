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


$ObjetoGasto = $_POST['ObjetoGastoRegistro'] ;

//echo '<BR> ObjetoGasto:  '.$ObjetoGasto;


$Producto = $_POST['DescripcionProductoRegistro'] ;

//echo ' Producto:'.$Producto;



////





$AUX = addslashes($Producto);

$Producto = $AUX;
////


$idRequi = $_POST['idRequi'] ;

//echo ' idRequi:'.$idRequi;







$sql='
INSERT INTO catcProductos(

    idObjetoGasto,
    descripcionProducto,
    idLicitacion,
    Activo

)
VALUES( 
    '.$ObjetoGasto.',
    "'.$Producto.'",
    0,
    1


)';





//  echo "<br>";
//  echo $sql;




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

           
          
          

            header('Location: registroObjetosRequi.php?id='.$idRequi.'&Mensaje=addok&obj='.$ObjetoGasto.'&prod='.$Producto.'');
     }
     else {
       echo "Error al momento de insertar";
        //header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }
 






  mysqli_close($conexion);







?>
