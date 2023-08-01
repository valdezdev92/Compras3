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

// esto es el id de la requi
$id = $_GET['id'];

// esto es el id de el catalogo movdrequis2023
$idd = $_GET['idd'];

// es la opcion para marcar que si llego o no.
$opc = $_GET['opc'];




// paso numero 1 insertar en tabla movdRequisiciones2023Recibidas





if ($opc == 1) {

  
      $sql='
      UPDATE movdRequisiciones2023
      SET 
      idRecibido = 1
      WHERE
      idRequisiciones2023 = '.$idd.'';

      
      $host_db = "localhost";
      $user_db = "root";
      $pass_db = "sr1920la";
      $db_name = "Compras3";
      $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

      if ($conexion->connect_error) {
            die("La conexion falló: " . $conexion->connect_error);
         }
            // echo $sql;

                  
            if ($conexion->query($sql) )
            {

                  // si si, se inserta buscaremos que no queden partidas sin clasificar

                  $sqlRev = "SELECT *, b.Cantidad AS CantidadProducto FROM Requisiciones2023 a INNER JOIN movdRequisiciones2023 b on a.idRequisiciones2023 = b.idRequisiciones2023 INNER JOIN catcUnidadesMedida c on b.idcatcUnidadesMedida = c.idcatcUnidadesMedida INNER JOIN catcProductos d on b.idProducto = d.idProducto WHERE a.idRequisiciones2023 = $id and b.idRecibido = 0";
                  $resultado = $conexion->query($sqlRev);
                  $row2 = mysqli_num_rows($resultado);
              // echo 'var Count ='.$row2.'';

                if ($row2 == 0) 
                {
                  $sql3='
                  UPDATE Requisiciones2023
                  SET 
                  idProceso = 3
                  WHERE
                  idRequisiciones2023 = '.$id.'';

                  $conexion->query($sql3);

                  //echo"correcto";
                  header('Location: pendienteRecibir2.php');
                }else {
                  header('Location: pendienteRecibir2.php');
                }
               


                     
            }
     else {
     echo "Error al momento de insertar";
      //  header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }


 }
 else if ($opc == 2) {

  
  $sql='
  UPDATE movdRequisiciones2023
  SET 
  idRecibido = 2
  WHERE
  idmovdRequisiciones2023 = '.$idd.'';

  
  $host_db = "localhost";
  $user_db = "root";
  $pass_db = "sr1920la";
  $db_name = "Compras3";
  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

  if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
     }
        // echo $sql;

              
        if ($conexion->query($sql) )
        {

              // si si, se inserta buscaremos que no queden partidas sin clasificar

              $sqlRev = "SELECT *, b.Cantidad AS CantidadProducto FROM Requisiciones2023 a INNER JOIN movdRequisiciones2023 b on a.idRequisiciones2023 = b.idRequisiciones2023 INNER JOIN catcUnidadesMedida c on b.idcatcUnidadesMedida = c.idcatcUnidadesMedida INNER JOIN catcProductos d on b.idProducto = d.idProducto WHERE a.idRequisiciones2023 = $id and b.idRecibido = 0";
              $resultado = $conexion->query($sqlRev);
              $row2 = mysqli_num_rows($resultado);
         //  echo 'var Count ='.$row2.'';

            if ($row2 == 0) 
            {
              $sql3='
              UPDATE Requisiciones2023
              SET 
              idProceso = 3
              WHERE
              idRequisiciones2023 = '.$id.'';

              $conexion->query($sql3);

              //echo"correcto";
              header('Location: pendienteRecibir2.php');
            }else {
              header('Location: pendienteRecibir2.php');
            }
           


                 
        }
 else {
 echo "Error al momento de insertar";
  //  header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
 }

}

else if ($opc == 3) {

  $sql='
  UPDATE movdRequisiciones2023
  SET 
  idRecibido = 1
  WHERE
  idmovdRequisiciones2023 = '.$idd.'';

  
  $host_db = "localhost";
  $user_db = "root";
  $pass_db = "sr1920la";
  $db_name = "Compras3";
  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

  if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
     }
        // echo $sql;

              
        if ($conexion->query($sql) )
        {

              // si si, se inserta buscaremos que no queden partidas sin clasificar

              $sqlRev = "SELECT *, b.Cantidad AS CantidadProducto FROM Requisiciones2023 a INNER JOIN movdRequisiciones2023 b on a.idRequisiciones2023 = b.idRequisiciones2023 INNER JOIN catcUnidadesMedida c on b.idcatcUnidadesMedida = c.idcatcUnidadesMedida INNER JOIN catcProductos d on b.idProducto = d.idProducto WHERE a.idRequisiciones2023 = $id and b.idRecibido = 0";
              $resultado = $conexion->query($sqlRev);
              $row2 = mysqli_num_rows($resultado);
          // echo 'var Count ='.$row2.'';

            if ($row2 == 0) 
            {
              $sql3='
              UPDATE Requisiciones2023
              SET 
              idProceso = 3
              WHERE
              idRequisiciones2023 = '.$id.'';

              $conexion->query($sql3);

              //echo"correcto";
              header('Location: pendienteRecibir2.php');
            }else {
              header('Location: pendienteRecibir2.php');
            }
           


                 
        }
 else {
 echo "Error al momento de insertar";
  //  header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
 }



}
 









 






  mysqli_close($conexion);







?>
