<?php

session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

 } else {
       header('Location: ../page_403.php?Mensaje=No Existe sesión');

 exit;
 }
 $now = time();
 $expiracion = $_SESSION['expire'];


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



$idRequi = $_POST['idRequi'] ;
$idMovdRequi = $_POST['Producto'] ;








$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";



$db_name = "Compras3";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}



// Obtenemos toda la informacion de el renglon con el Idmovd y luego creamos una tabla temporal para hacer medidas y cuentas del mix 
// y vamos marcando cada renglon con el Folio de UF para que se vallan marcando


$sql1="SELECT * FROM movdRequisiciones2023 a INNER JOIN Requisiciones2023 b on a.idRequisiciones2023 = b.idRequisiciones2023 WHERE a.idmovdRequisiciones2023 = $idMovdRequi";
//echo $sql1;
$result = $conexion->query($sql1);

if ($result->num_rows > 0)  {}
          
$row = $result->fetch_array(MYSQLI_ASSOC);


$Cantidad = $row['Cantidad'];

$unidadMedidaTraducida = $row['unidadMedidaTraducida'];

$idObjetoGasto = $row['idObjetoGasto'];

$descripcionProductoRequi = $row['descripcionProductoRequi'];

$Folio = $_POST['Folio'];



// fin obtener info

// Verificamos que no exista en el temporal

$VerSql = "SELECT * FROM movdTempRequiMIX WHERE idmovdRequisiciones2023 = $idMovdRequi";

//echo $VerSql;
$result = $conexion->query($VerSql);

if ($result->num_rows > 0)  
{
    //ya existe el registro
    header('Location: registroObjetosRequiMIX.php?id='.$idRequi.'#partidas');}else
{
  // insertar registro
  $sql2= '

    INSERT INTO movdTempRequiMIX(
      idObjetoGasto,
      Cantidad,
      unidadMedidaTraducida,
      descripcionProductoRequi,
      idmovdRequisiciones2023,
      idRequisiciones2023
    )
    VALUES(
      '.$idObjetoGasto.',
      '.$Cantidad.',
    "'.$unidadMedidaTraducida.'",
      "'.$descripcionProductoRequi.'",
      '.$idMovdRequi.',
      '.$idRequi.'
      
    )

    ';
    echo $sql2;

   if($conexion->query($sql2))
   {
        $sql3 ='

        INSERT INTO Requisiciones2023MovdUF(

          idRequisiciones2023,
          idmovdRequisiciones2023,
          OrdenCompra,
          FolioUF
      )
      VALUES(

        '.$idRequi.',
        '.$idMovdRequi.',
        "OC",
        "'.$Folio.'"

         
      )
                
        ';

        
   if($conexion->query($sql3))
   {

    header('Location: registroObjetosRequiMIX.php?id='.$idRequi.'');

   }else {
    echo "Error Waldorf";

   // echo $sql3;
   }


   }else {
    echo "Error al insertar 1";
   }

   

}

// iniocio insertar en tabla temp





// enera Descripcion producto leiible  FIN





            
    




  mysqli_close($conexion);







?>
