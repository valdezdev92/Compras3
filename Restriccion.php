<?php

$username = $_SESSION['username'];

$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";
$db_name = "Compras";
$tbl_name = "Usuarios";
  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}




if (($username == 'lrvaldez') || ($username == 'nmendez')  || ($username == 'mfloresd') || ($username == 'raramire')  || ($username == 'oaperez') || ($username == 'ciaguilar'  || ($username == 'paulina' ) ) )
{
  // code...





}
else {

  $sql = "SELECT * FROM Usuarios WHERE NoEmpleado = $username "; //Consulta

  echo $sql;

  $resultado = $conexion->query($sql);
                            //Ejecucion de la consulta
  while ($row = $resultado->fetch_assoc() )
   {
   }

  if ( ($row['Nivel'] == 1 ) || ($row['Nivel'] == 2 ) )
   {
    // code...
  }
  else {

    	session_destroy();
    header('Location: /page_403.php?Mensaje=Usted no tiene acceso a esta area, por su infracción su sesion ha sido cerrada');
  }

}


 ?>
