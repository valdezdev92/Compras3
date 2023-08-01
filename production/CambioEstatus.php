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
  $tbl_name = "Usuarios";
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

  if ($conexion->connect_error) {
   die("La conexion falló: " . $conexion->connect_error);
  }



 $Folio = $_GET['Folio'] ;

echo '<BR> Folio:  '.$Folio;



 $IdRequi = $_GET['IdRequi'] ;

echo '<BR> IdRequi:  '.$IdRequi;


 $Accion = $_GET['Accion'] ;

echo '<BR> Accion:  '.$Accion;


switch ($Accion)
 {
	case 1:
		// code...
		$sql = 'UPDATE Requi SET Estatus = 1 WHERE IdRequi = '.$IdRequi.'';
		$resultado = $conexion->query($sql);

				 header('Location: consulta.php');

		break;

		case 2:
			// code...
			$sql = 'UPDATE Requi SET Estatus = 2 WHERE IdRequi = '.$IdRequi.'';
			$resultado = $conexion->query($sql);

					 header('Location: consulta.php');

			break;

	default:
		// code...
		break;
}



  //
	// $sql0= 'Select * From Requi Where Folio = '.$Folio.'';
  //
  //
	// $Resultado = $conexion->query($sql0);
  //
  // $row = $Resultado->fetch_assoc()
  //
  // $EstatusActual =  $row['Estatus'];
  //
  // echo $EstatusActual;



//
//                                                     $host_db = "localhost";
//                                                     $user_db = "root";
//                                                     $pass_db = "sr1920la";
//                                                     $db_name = "Compras";
//                                                     $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
//
//                                                     if ($conexion->connect_error) {
//                                                      die("La conexion falló: " . $conexion->connect_error);
//                                                     }
//
//
//
//
//
//                                                     $sql = 'SELECT * FROM Requi WHERE IdRequi = '.$IdRequi.'';
//                                                     $resultado = $conexion->query($sql);
//
//                                                     while ($row = $resultado->fetch_assoc() )
//                                                      {
//
//
//                                                           $EstatusActual = $row['Estatus'];
//
//
//                                                         }
//
//                                                           echo '<br>Estatus: '.$EstatusActual;
//
//                                                           if ($EstatusActual == 0)
//                                                            {
//
//                                                              $sql = 'UPDATE Requi SET Estatus = 1 WHERE IdRequi = '.$IdRequi.'';
//                                                              $resultado = $conexion->query($sql);
//
//                                                               		header('Location: consulta.php');
//
//
//
//                                                           }
//                                                           else {
//
//
//
//
//                                                             // Verificacion de que exista una cotizacion
//
// 																															$sql = 'SELECT * FROM MovcRequis Where Folio = '.$Folio.'';
// 																															$resultado = $conexion->query($sql);
//
// 																															while ($row = $resultado->fetch_assoc() )
// 																															 {
//
// 																																}
//
// 																															$BanderaEliminar = $resultado->num_rows;
//
//
// 																														echo " <BR>Cuantos renglones hay   '.$BanderaEliminar.' ";
//
//
//
//
// 																															switch ($BanderaEliminar)
// 																															 {
// 																																case '0':
// 																														//Se cambia el estatus sin chistar
//
// 																														$SeElimina = 0;
//
// 																																	break;
//
// 																																default:
// 																															// Se Elimina el registro en MovcRequis
//
// 																													$SeElimina = 1;
// 																																	break;
// 																															}
//
//                                                             // Verificacccion END
//
//
// 																													if ($SeElimina == 1)
// 																													 {
// 																														 	//Se elimina el registro
//
//
// 																													$sql = 'DELETE FROM MovcRequis WHERE Folio = '.$Folio.' ';
// 																												  $resultado = $conexion->query($sql);
//
//
// 																													$sql = 'UPDATE Requi SET Estatus = 0 WHERE IdRequi = '.$IdRequi.'';
// 																													$resultado = $conexion->query($sql);
//
// 																															header('Location: consulta.php');
//
//
//
// 																													}
// 																													else
// 																													{
// 																														//Solo se cambia el estatus
//
// 
//
// 																												$sql = 'UPDATE Requi SET Estatus = 0 WHERE IdRequi = '.$IdRequi.'';
// 																												$resultado = $conexion->query($sql);
//
// 																														header('Location: consulta.php');
//
//                                                           }
//
//
//
// }












 ?>
