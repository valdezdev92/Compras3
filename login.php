<?php
session_start();


	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "sr1920la";
	$db_name = "Compras3";
	$tbl_name = "Usuarios";
		$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

	if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}

	$username = $_POST['Usuario'];
	$password = $_POST['Password'];

  //echo "$username";

  if ($username == '')
  {
   header('Location: ErrorIndex.php');
  }
  if ($_POST["Usuario"] == '' || $_POST["Password"] == '' )
   {
     header('Location: production/page_403.php?Mensaje=Usuario o contraseña estan vacios');
	 //echo "hi";
       session_destroy();

  exit;
  }



	$sql = "SELECT * FROM $tbl_name WHERE Usuario = '$username'";

  //echo $sql;

	$result = $conexion->query($sql);


	if ($result->num_rows > 0) {
	 }
	 $row = $result->fetch_array(MYSQLI_ASSOC);

//echo $row['Password'];

	 if ( $password == $row['Password'] )
	  {

		echo "holi si entre";

	    $_SESSION['loggedin'] = true;
	    $_SESSION['username'] = $username;
	    $_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (120000 * 60);
			// $_SESSION['nivel'] = $row['IdNivel'];

	    echo "Bienvenido! " . $_SESSION['username'];

			$host_db = "localhost";
			$user_db = "root";
			$pass_db = "sr1920la";
			$db_name = "Compras";
			$tbl_name = "Usuarios";
				$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

			if ($conexion->connect_error) {
			 die("La conexion falló: " . $conexion->connect_error);
			}


			$hoy = date("Y-m-d");

			$sql = 'INSERT INTO MovdSessions (Usuario, Fecha) VALUES ("'. $username.'", "'.$hoy.'"  )';

			echo $sql;

			$resultado = $conexion->query($sql);


		switch ($row['Nivel']) {

			case 1:
 				header('Location: production/index.php');
			break;

			case 2:
				header('Location: production/pendienteRecibir2.php');
			break;

			case 3:

			    //header('Location: production/Mantenimiento.php');
				header('Location: production/indexLv3.php');
			break;

			default:
				// code...
				break;
		}


	 } else {
	   header('Location: production/page_403.php?Mensaje=Usuario o contraseña incorrecta');

    // echo "error";


	 }
	 mysqli_close($conexion);
	 ?>
