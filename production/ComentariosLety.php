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

  $ObservacionesLety = $_POST['ObservacionesLety'] ;
  $IdRequi = $_POST['IdRequi'] ;
  $Folio = $_POST['Folio'] ;


	$sql2 = 'Select * FROM Requi Where Folio = '.$Folio.' ';



  echo $sql2;

	$result = $conexion->query($sql2);


	if ($result->num_rows > 0) {
	 }
	 $row = $result->fetch_array(MYSQLI_ASSOC);


	$Usuario = $row['Creador'];



	$sql3 = 'Select * FROM Usuarios Where Usuario = "'.$Usuario.'" ';


	echo $sql3;

	$result = $conexion->query($sql3);


	if ($result->num_rows > 0) {
	 }
	 $row = $result->fetch_array(MYSQLI_ASSOC);

	 $Correo = $row['Correo'];










$sql =' UPDATE  Requi  SET ObservacionesLety = "'.$ObservacionesLety.'" , Estatus = 2  WHERE Folio = '.$Folio.'';






require("PHPMailer-master/src/PHPMailer.php");
 require("PHPMailer-master/src/SMTP.php");

	 $mail = new PHPMailer\PHPMailer\PHPMailer();
	 $mail->IsSMTP(); // enable SMTP

	 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	 $mail->SMTPAuth = true; // authentication enabled
	 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	 $mail->Host = "smtp.gmail.com";
	 $mail->Port = 465; // or 587
	 $mail->IsHTML(true);
	 $mail->Username = "fing.compras@gmail.com";
	 $mail->Password = "fing.tesoreria";
	 $mail->SetFrom("fing.compras@gmail.com");
	 $mail->Subject = "Seguimiento a Requi '.$Folio.' ";
	 $mail->Body = '<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1"> <b>Le informamos que su requisición no ha sido autorizada por los siguientes motivos :</b><br><br> <br>  '.$ObservacionesLety.'  <br><br>
	 <br> Facultad de Ingeniería
  <br>Circuito Vial 1, Edificio Administrativo (Planta alta)
  <br>Nuevo Campus Universitario
  <br>Correo: fing.compras@gmail.com
  T<br>eléfono: +52 (614) 442-9500 Ext. 2553';

	 $mail->AddAddress("$Correo");
	 $mail->AddAddress("fing.compras@gmail.com");

		if(!$mail->Send()) {
			 echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			 echo "Message has been sent";
		}


	// echo "<br>";
	// echo $sql;




	if ($conexion->query($sql) ) {


		header('Location: consulta.php');


		// header('Location:mostrarAutorizar.php?Folio='.$Folio.'&IdRequi='.$IdRequi.'');


	echo "Correcto";



	}
	else {
	  echo "Error";
		// header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
	}


	 mysqli_close($conexion);







 ?>
