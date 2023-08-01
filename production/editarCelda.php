<?php


include '../Sesiones.php';
include '../Header.php';
include '../Footer.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';
require '../ConexionDB.php';


// $host_db = "localhost";
// $user_db = "root";
// $pass_db = "sr1920la";
// $db_name = "Compras3";
// $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

// if ($conexion->connect_error) {
//     die("La conexion falló: " . $conexion->connect_error);
// }

$servername = "localhost";
$username = "root";
$password = "sr1920la";
$dbname = "Compras3";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


    $input = filter_input_array(INPUT_POST);
  // echo $input['action'];
    if ($input['action'] == 'edit') {   
      // error_log("¡si entro!- ".$input['unidadMedidaTraducida'], 0);
        $update_field='';
        if(isset($input['Cantidad'])) {
            $update_field.= 'Cantidad='.$input['Cantidad'].',';
            $update_field.= "unidadMedidaTraducida='".$input['unidadMedidaTraducida']."',";
            $update_field.= "descripcionProductoRequi='".$input['Descripcion']."',";
            $update_field.= 'idObjetoGasto='.$input['Objeto'].'';

            }      
            
    }
        if($update_field && $input['id']) {
            $sql_query = "UPDATE movdRequisiciones2023 SET $update_field WHERE idmovdRequisiciones2023=" . $input['id'] . ""; 
            error_log("¡si entro- $sql_query!", 0); 
            mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));     
        }
    

 

?>