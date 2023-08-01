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




$id = $_GET['id'];
$opc = $_GET['opc'];


if ($opc == 4) {

  
   $sql='
   UPDATE Requisiciones2023
   SET 
     idProceso = 3
   WHERE
   idRequisiciones2023 = '.$id.'';
   
   }else{
      $sql='
      UPDATE Requisiciones2023
      SET 
        idProceso = 2
      WHERE
      idRequisiciones2023 = '.$id.'';
      
   
   }
   
   



// echo "<br>";
// echo $sql;




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

        //    $sql = 'SELECT @@IDENTITY AS "idRequisiciones2023"';

           // echo $sql;

        //    $result = $conexion->query($sql);


        //    if ($result->num_rows > 0) 
        //    {

        //     }
        //     $row = $result->fetch_array(MYSQLI_ASSOC);

            // $id = $row['idRequisiciones2023'];

           
        if ($opc == 4) {

  
         header('Location: pendienteAutorizar.php');
         
         }else{

            header('Location: pendienteRecibir.php');
         }

     }
     else {
    //   echo "Error al momento de insertar";
        header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }
 






  mysqli_close($conexion);







?>
