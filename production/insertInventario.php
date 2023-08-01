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
 $db_name = "Compras";
 $tbl_name = "inventario";
   $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
 }



$noArticulo = $_POST['noArticulo'];




$presArticulo = $_POST['presArticulo'] ;

$desArticulo= $_POST['desArticulo'] ;

$cantArticulo = $_POST['cantArticulo'] ;

$colArticulo = $_POST['colArticulo'] ;



$FechaInicio = date("d/m/Y") ;

$Dia = substr($FechaInicio, 0, 2);
$Mes = substr($FechaInicio, 3, 2);
$Año = substr($FechaInicio, 6, 4);

$Fecha = $Año.'-'.$Mes.'-'.$Dia;

// echo ' Fecha:'.$Fecha;




  $sqlFolio='SELECT * FROM inventario WHERE noArticulo = "'.$noArticulo.'"';

  // echo $sqlFolio;



  $resultado = $conexion->query($sqlFolio);

   $row = $resultado ->fetch_array(MYSQLI_ASSOC);

  if ($resultado ->num_rows > 0)
  {
    echo "Ya existia el articulo se suman?";




    $cantArticuloNEW = $row['Cantidad'] + $cantArticulo;

    echo $cantArticuloNEW;



    $sql = 'UPDATE inventario SET Cantidad= '.$cantArticuloNEW.', Fecha ="'.$Fecha.'" WHERE noArticulo = '.$noArticulo.'';

    echo $sql;


     $resultado = $conexion->query($sql);

        header('Location: inventario.php?Mensaje=Correcto');


   }
   else
   {
      // el articulo no se ha ingresado





       $sql = 'INSERT INTO inventario (

         Unidad,
         Descripcion,
         Cantidad,
         Color,
         Fecha

       )
       VALUES
       (


      "'.$presArticulo.'",
      "'.$desArticulo.'",
      '.$cantArticulo.',
      "'.$colArticulo.'",
      "'.$Fecha.'"


       )';
      // echo $sql;


        $resultado = $conexion->query($sql);

         header('Location: inventario.php?Mensaje=Correcto');
   }







   // $row = $resultado ->fetch_array(MYSQLI_ASSOC);






  mysqli_close($conexion);







?>
