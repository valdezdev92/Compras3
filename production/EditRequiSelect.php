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

   $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
 }
 


$username = $_SESSION['username'];


$idRequi = $_POST['idRequi'] ;

$idRequi2 = $_POST['idRequi2'] ;


if ($idRequi != 0) 
    {
                    $host_db = "localhost";
                    $user_db = "root";
                    $pass_db = "sr1920la";
                    $db_name = "Compras3";
                    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

                    if ($conexion->connect_error) {
                    die("La conexion falló: " . $conexion->connect_error);
                    }

                    $sql='
                    UPDATE Requisiciones2023
                    SET 
                    Estatus = "Modificable"
                    WHERE
                    idRequisiciones2023 = '.$idRequi.'';

                    //echo "<br>";
                    //echo $sql;


                    if ($conexion->query($sql) )
                    {

                    //echo "Correcto";

                    header('Location: editableUsuarios.php?');
                    }
                    else {
                    echo "Error al momento de insertar";
                        //header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
                    }


                    
 //mysqli_close($conexion);




    }else {
        $host_db = "localhost";
        $user_db = "root";
        $pass_db = "sr1920la";
        $db_name = "Compras3";
        $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

        if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
        }

        $sql='
        UPDATE Requisiciones2023
        SET 
        Estatus = "Modificable"
        WHERE
        idRequisiciones2023 = '.$idRequi2.'';

        //echo "<br>";
        //echo $sql;


        if ($conexion->query($sql) )
        {

        //echo "Correcto";

        header('Location: editableUsuarios.php?');
        }
        else {
        echo "Error al momento de insertar";
            //header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
        }
    }


?>
