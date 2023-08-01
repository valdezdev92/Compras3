<?php

session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	} else {
	      header('Location: ../page_403.php?Mensaje=No Existe sesión');

	exit;
	}
	$now = time();
 // $expiracion = $_SESSION['expire'];

  // echo "$now";
  // echo "<br>";
  // echo "$expiracion";

	//if($now > $_SESSION['expire'])
	//{
	//session_destroy();
//
   //  header('Location: ../page_403.php?Mensaje=Tiempo Agotado');
	//exit;
	//}


 ?>
