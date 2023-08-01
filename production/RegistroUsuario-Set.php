<?php




  $host_db = "localhost";
  $user_db = "root";
  $pass_db = "sr1920la";
  $db_name = "Compras3";
  $tbl_name = "Usuarios";
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
date_default_timezone_set('America/Chihuahua');

$hoy = getdate();
$d = $hoy['mday'];
  $m = $hoy['mon'];
  $y = $hoy['year'];

    $d2= date("d");
    $m2= date("m");
    $y2= date("y");

  if ($conexion->connect_error) {
   die("La conexion falló: " . $conexion->connect_error);
  }

    $NoEmpleado = $_POST['NoEmpleado'] ;
    $PrimerNombre = $_POST['primer-nombre'] ;
    $PrimerApellido = $_POST['primer-apellido'] ;
    $Centro = $_POST['centro'] ;
    $Password1 = $_POST['password1'] ;
    $Password2 = $_POST['password2'] ;
    $codigo = $_POST['codigo'] ;
    $Correo = $_POST['Correo'] ;
    $Extension = $_POST['Ext'] ;
    $Usuario = $NoEmpleado;
    $Fecha = $y.'-'.$m.'-'.$d;


    switch ($codigo)

    {
        case 'ADMX18':
        // code...
          $Insert = 1;
          $Nivel = 3;

        break;
        case 'POSX18':
          $Insert = 1;
          $Nivel = 3;

          break;
        case 'PLAX18':
          $Insert = 1;
          $Nivel = 3;

          break;
        case 'EXTX18':
          $Insert = 1;
          $Nivel = 3;

          break;
        case 'ACAX18':
          $Insert = 1;
          $Nivel = 3;

          break;
        case 'DIRX18':
          $Insert = 1;
          $Nivel = 3;

          break;
        case 'LABX18':
          $Insert = 1;
          $Nivel = 3;

          break;


          default:
          $Insert = 0;

              break;
}


if (  $Insert == 1)
  {

    // $query= mysqli_query($conexion, "SELECT COUNT(*) FROM Usuarios Where NoEmpleado = '$NoEmpleado'");
    // $contador = mysqli_num_rows($query);
    // echo '<br>Contador '.$contador;



    $sql = "SELECT NoEmpleado FROM Usuarios WHERE NoEmpleado = '.$NoEmpleado.'"; //Consulta

    $resultado = $conexion->query($sql);                                   //Ejecucion de la consulta
    while ($row = $resultado->fetch_assoc() )
  	 {
     }

if ( $row["NoEmpleado"] == $NoEmpleado)

{
  //no se inserta

  $SeInserta = 0;
}
else {
  // se insertar
    $SeInserta = 1;

}


     // echo " <BR>Cuantos renglones hay   $BanderaInsertar ";
     // switch ($contador)
     //  {
     //   case '0':
     //     # code... se inserta
     //     $SeInserta = 1;
     //     break;
     //   default:
     //     # code...
     //     $SeInserta = 0;
     //     break;
     // }
   if ($SeInserta == 1)
     	{


        $sql2 = 'INSERT INTO Usuarios (NoEmpleado,PrimerNombre,PrimerApellido,Centro,Usuario,Password,Nivel,FechaCreacion,Codigo,Correo,Extension)
        VALUES ('.$NoEmpleado.',"'.$PrimerNombre.'","'.$PrimerApellido.'","'.$Centro.'",'.$Usuario.',"'.$Password1.'",'.$Nivel.',"'.$Fecha.'","'.$codigo.'","'.$Correo.'","'.$Extension.'")';



        if ($conexion->query($sql2) )
          {
              header('Location: RegistroUsuario-Mensajes.php?Mensaje=1');
             echo "Correcto";
          }
        else
          {
            echo "Error al momento de insertar";

            header('Location: RegistroUsuario-Mensajes.php?Mensaje=2');

            // header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
           }
     	}
   	else
      {
       	// header('Location: Index.php?Mensaje=YaExiste&Folio='.$Folio.'');
       	echo "Error no se debe insertar porque ya existe uno";
          header('Location: RegistroUsuario-Mensajes.php?Mensaje=2');
     	}


  }


else
{
  // code...
  $Mensaje ="Codigo de Registro Incorrecto";
  echo $Mensaje;

  header('Location: RegistroUsuario-Mensajes.php?Mensaje=3');
}




 ?>
