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
  $db_name = "Rh";
  $tbl_name = "Usuarios";
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

  if ($conexion->connect_error) {
   die("La conexion falló: " . $conexion->connect_error);
  }



 $IdTipoEmpleado = $_POST['TipoEmpleado'] ;

echo '<BR> TIPO EMPLEADO:  '.$IdTipoEmpleado;

$NoEmpleado = $_POST['NumeroEmpleado'] ;

echo 'NUMERO EMPLEADO : '.$NoEmpleado;


$Nombre = $_POST['Nombre'] ;

echo '<BR> NOMBRE :'.$Nombre;


$ApellidoPaterno = $_POST['ApellidoPaterno'] ;

echo ' <BR> APELLIDO PATERNO :'.$ApellidoPaterno;


$ApellidoMaterno = $_POST['ApellidoMaterno'] ;

echo ' <BR> APELLIDO MATERNO :'.$ApellidoMaterno;




$FechaNac = $_POST['FechaNacimiento'] ;

echo ' <BR> FECHA DE NAC: '.$FechaNac;

$Dia = substr($FechaNac, 0, 2);
$Mes = substr($FechaNac, 3, 2);
$Año = substr($FechaNac, 6, 4);

$FechaNac = $Año.'-'.$Mes.'-'.$Dia;




echo ' <BR> FECHA DE NAC: '.$FechaNac;


//
// $Direccion = $_POST['Direccion'] ;
//
// echo $Direccion;


$Calle = $_POST['Calle'] ;

echo '<BR>CALLE :'.$Calle;


$Colonia = $_POST['Colonia'] ;

echo '<BR>COLONIA :'.$Colonia;


$CodigoPostal = $_POST['CodigoPostal'] ;

echo '<BR>CODIGO POSTAL :'.$CodigoPostal;

$IdGenero = $_POST['Genero'] ;

echo '<BR>GENERO :'.$IdGenero;



$Telefono = $_POST['Telefono'] ;

echo '<BR>TELEFONO :'.$Telefono;


$Celular = $_POST['Celular'] ;

echo '<BR>CELULAR : '.$Celular;


$IdEscolaridad = $_POST['Escolaridad'] ;

echo '<BR>ESCOLARIDAD :'.$IdEscolaridad;

$Carrera = $_POST['Carrera'] ;

echo '<BR>CARRERA :'.$Carrera;


$IdEstadoCivil = $_POST['EstadoCivil'] ;

echo '<BR>ESTADO CIVIL : '.$IdEstadoCivil;


$NombreEsposoa = $_POST['NombreEsposo'] ;

echo '<BR>NOMBRE ESPOSO/A :'.$NombreEsposoa;


$FechaNacimienoEsposoa = $_POST['FechaNacEsposoa'] ;

$Dia = substr($FechaNacimienoEsposoa, 0, 2);
$Mes = substr($FechaNacimienoEsposoa, 3, 2);
$Año = substr($FechaNacimienoEsposoa, 6, 4);

$FechaNacimienoEsposoa = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA NAC ESPOSO/A :'.$FechaNacimienoEsposoa;


$NomHijo1 = $_POST['NombreHijo1'] ;

echo '<BR>NOMBRE HIJO 1:'.$NomHijo1;


$FechaNacHijo1 = $_POST['FechaNacHijo1'] ;

$Dia = substr($FechaNacHijo1, 0, 2);
$Mes = substr($FechaNacHijo1, 3, 2);
$Año = substr($FechaNacHijo1, 6, 4);

$FechaNacHijo1 = $Año.'-'.$Mes.'-'.$Dia;


echo '<BR>FECHA NAC HIJO 1:'.$FechaNacHijo1;


$NomHijo2 = $_POST['NombreHijo2'] ;

echo '<BR> NOMBRE HIJO 2 :'.$NomHijo2;


$FechaNacHijo2 = $_POST['FechaNacHijo2'] ;


$Dia = substr($FechaNacHijo2, 0, 2);
$Mes = substr($FechaNacHijo2, 3, 2);
$Año = substr($FechaNacHijo2, 6, 4);

$FechaNacHijo2 = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA NAC HIJO 2:'.$FechaNacHijo2;


$NomHijo3 = $_POST['NombreHijo3'] ;

echo '<BR>NOMBRTE HIJO 3:'.$NomHijo3;


$FechaNacHijo3 = $_POST['FechaNacHijo3'] ;

$Dia = substr($FechaNacHijo3, 0, 2);
$Mes = substr($FechaNacHijo3, 3, 2);
$Año = substr($FechaNacHijo3, 6, 4);

$FechaNacHijo2 = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA NAC HIJO 3 :'.$FechaNacHijo3;


$NomHijo4 = $_POST['NombreHijo4'] ;

echo '<BR>NOMBRE HIJO 4:'.$NomHijo4;


$FechaNacHijo4 = $_POST['FechaNacHijo4'] ;

$Dia = substr($FechaNacHijo4, 0, 2);
$Mes = substr($FechaNacHijo4, 3, 2);
$Año = substr($FechaNacHijo4, 6, 4);

$FechaNacHijo4 = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA NAC HIJO 4 :'.$FechaNacHijo4;


$NomHijo5 = $_POST['NombreHijo5'] ;

echo '<BR>NOMBRE HIJO 5 :'.$NomHijo5;

$FechaNacHijo5 = $_POST['FechaNacHijo5'] ;

$Dia = substr($FechaNacHijo5, 0, 2);
$Mes = substr($FechaNacHijo5, 3, 2);
$Año = substr($FechaNacHijo5, 6, 4);

$FechaNacHijo5 = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA NAC HIJO 5 :'.$FechaNacHijo5;

$NomHijo6 = $_POST['NombreHijo6'] ;

echo '<BR>NOMBRE HIJO 6:'.$NomHijo6;



$FechaNacHijo6 = $_POST['FechaNacHijo6'] ;


$Dia = substr($FechaNacHijo6, 0, 2);
$Mes = substr($FechaNacHijo6, 3, 2);
$Año = substr($FechaNacHijo6, 6, 4);

$FechaNacHijo6 = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA NAC HIJO 6:'.$FechaNacHijo6;



$NomHijo7 = $_POST['NombreHijo7'] ;

echo '<BR>NOMBRE HIJO 7:'.$NomHijo7;



$FechaNacHijo7 = $_POST['FechaNacHijo7'] ;

$Dia = substr($FechaNacHijo7, 0, 2);
$Mes = substr($FechaNacHijo7, 3, 2);
$Año = substr($FechaNacHijo7, 6, 4);

$FechaNacHijo7 = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA NAC HIJO 7 :'.$FechaNacHijo7;



$NomHijo8 = $_POST['NombreHijo8'] ;

echo '<BR>NOMBRE HIJO 8:'.$NomHijo8;



$FechaNacHijo8 = $_POST['FechaNacHijo8'] ;

$Dia = substr($FechaNacHijo8, 0, 2);
$Mes = substr($FechaNacHijo8, 3, 2);
$Año = substr($FechaNacHijo8, 6, 4);

$FechaNacHijo8 = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA NAC HIJO 8:'.$FechaNacHijo8;



$NomHijo9 = $_POST['NombreHijo9'] ;

echo '<BR>NOMBRE HIJO 9:'.$NomHijo9;


$FechaNacHijo9 = $_POST['FechaNacHijo9'] ;

$Dia = substr($FechaNacHijo9, 0, 2);
$Mes = substr($FechaNacHijo9, 3, 2);
$Año = substr($FechaNacHijo9, 6, 4);

$FechaNacHijo9 = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA NAC HIJO 9:'.$FechaNacHijo9;



$FechaIngreso = $_POST['FechaIngreso'] ;

$Dia = substr($FechaIngreso, 0, 2);
$Mes = substr($FechaIngreso, 3, 2);
$Año = substr($FechaIngreso, 6, 4);

$FechaIngreso = $Año.'-'.$Mes.'-'.$Dia;

echo '<BR>FECHA INGRESO :'.$FechaIngreso;




$Puesto= $_POST['Puesto'];

echo '<BR>PUESTO ::'.$Puesto;



$JefeInmediato= $_POST['JefeInmediato'];

echo '<BR>JefeInmediato ::'.$JefeInmediato;


$Observaciones= $_POST['Observaciones'];

echo '<BR>Observaciones ::'.$Observaciones;


$MotivoIngreso= $_POST['MotivoIngreso'];

echo '<BR>MotivoIngreso ::'.$MotivoIngreso;





// $type=$_FILES['Foto']['type'];
//
// $tmp_name = $_FILES['Foto']["tmp_name"];
//
// $name = $NumeroEmpleado.'.'.$ext;
//
//
//
// //Así guardaremos nuestra imagen en la carpeta "images"
// $nuevo_path="images/".$name;
//
//
// move_uploaded_file($tmp_name,$nuevo_path);
//
// $array=explode('.',$nuevo_path);
//
//
// $ext= end($array);
$srcImg_type = $_FILES['Foto']["type"];

if ($srcImg_type == "image/jpeg")
 {
	# True...

	//capturamos los datos del fichero subido
	$type=$_FILES['Foto']['type'];
	$tmp_name = $_FILES['Foto']["tmp_name"];
	// $name = $_FILES['Foto']["name"];
	$archivo=$_FILES['Foto']["name"];


	$extension = explode(".",$archivo);
	$ext = $extension[1];//AQUI LA EXTENSION


	// $name = $_FILES['Foto']["name"];
	$name = $NoEmpleado.'.'.$ext;





	//Creamos una nueva ruta (nuevo path)
	//Así guardaremos nuestra imagen en la carpeta "images"
	$nuevo_path="images/".$name;
	//Movemos el archivo desde su ubicación temporal hacia la nueva ruta
	# $tmp_name: la ruta temporal del fichero
	# $nuevo_path: la nueva ruta que creamos
	move_uploaded_file($tmp_name,$nuevo_path);
	//Extraer la extensión del archivo. P.e: jpg
	# Con explode() segmentamos la cadena de acuerdo al separador que definamos. En este caso punto (.)
	$array=explode('.',$nuevo_path);
	# Capturamos el último elemento del array anterior que vendría a ser la extensión
	$ext= end($array);

	// rename("images/.$name.", "images/.$NumeroEmpleado..");


	//Imprimimos un texto de subida exitosa.
	echo "<h3>La imagen se subio correctamente</h3>";
	// Los posible valores que puedes obtener de la imagen son:
	echo "<b>Info de la imagen subida:</b>";
	echo "<br> Nombre: ".$_FILES['Foto']["name"];      //nombre del archivo
	echo "<br> Tipo: ".$_FILES['Foto']["type"];      //tipo
	echo "<br> Nombre Temporal: ".$_FILES['Foto']["tmp_name"];  //nombre del archivo de la imagen temporal
	echo "<br> Tamanio: ".$_FILES['Foto']["size"]." bytes";      //tamaño




	$sql0= 'Select * From Recursos Where NoEmpleado = '.$NoEmpleado.'';


	$Resultado = $conexion->query($sql0);

	$Validacion = $Resultado->num_rows;

	switch ($Validacion)
	 {
	  case '0':
	  $SeInserta = 1;
	    break;

	  default:
	    $SeInserta = 0;
	    break;
	}

	if ($SeInserta == 1) {
		# code...



	$sql = 'INSERT INTO Recursos (IdTipoEmpleado,NoEmpleado,Nombre,ApellidoPaterno,ApellidoMaterno,IdGenero,FechaNac,Calle,Colonia,CodigoPostal,Telefono,Celular,IdEscolaridad,Carrera,IdEstadoCivil,NombreEsposoa,FechaNacimienoEsposoa,NomHijo1,FechaNacHijo1,NomHijo2,FechaNacHijo2,NomHijo3,FechaNacHijo3,NomHijo4,FechaNacHijo4,NomHijo5,FechaNacHijo5,NomHijo6,FechaNacHijo6,NomHijo7,FechaNacHijo7,NomHijo8,FechaNacHijo8,NomHijo9,FechaNacHijo9,IdFormato,Puesto,JefeInmediato,FechaIngreso,Observaciones,MotivoIngreso,Activo)
	VALUES
	('.$IdTipoEmpleado.',
	'.$NoEmpleado.',
	"'.$Nombre.'",
	"'.$ApellidoPaterno.'",
	"'.$ApellidoMaterno.'",
	'.$IdGenero.',
	"'.$FechaNac.'",
	"'.$Calle.'",
	"'.$Colonia.'",
	'.$CodigoPostal.',
	"'.$Telefono.'",
	"'.$Celular.'",
	'.$IdEscolaridad.',
	"'.$Carrera.'",
	'.$IdEstadoCivil.',
	"'.$NombreEsposoa.'",
	"'.$FechaNacimienoEsposoa.'",
	"'.$NomHijo1.'",
	"'.$FechaNacHijo1.'",
	"'.$NomHijo2.'",
	"'.$FechaNacHijo2.'",
	"'.$NomHijo3.'",
	"'.$FechaNacHijo3.'",
	"'.$NomHijo4.'",
	"'.$FechaNacHijo4.'",
	"'.$NomHijo5.'",
	"'.$FechaNacHijo5.'",
	"'.$NomHijo6.'",
	"'.$FechaNacHijo6.'",
	"'.$NomHijo7.'",
	"'.$FechaNacHijo7.'",
	"'.$NomHijo8.'",
	"'.$FechaNacHijo8.'",
	"'.$NomHijo9.'",
	"'.$FechaNacHijo9.'",
	"'.$ext.'",
	"'.$Puesto.'",
  "'.$JefeInmediato.'",
	"'.$FechaIngreso.'",
	"'.$Observaciones.'",
	"'.$MotivoIngreso.'",
	1)';


	echo "<br>";
	echo $sql;




	if ($conexion->query($sql) ) {


		header('Location: ../Mensajes.php?Accion=Correcto');


	echo "Correcto";



	}
	else {
	  echo "Error";
		// header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
	}
	// $row = $resultado->fetch_array(MYSQLI_ASSOC);


	}

	else {
		  echo "No se inserta";

			header('Location: ../Mensajes.php?Accion=Error&Mensaje=Ya Existe un registro.');
	}

	 mysqli_close($conexion);



}
else {
	echo "La imagen no es un archivo JPG";

	header('Location: ../Mensajes.php?Accion=Alerta&Mensaje=La imagen no es un archivo JPG.');

}





 ?>
