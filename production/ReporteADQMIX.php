<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';

date_default_timezone_set('America/Chihuahua');



 ?>


  <?php

$id = $_GET['id'];

$sqlinfo = "SELECT *, a.Estatus AS EstatusRequi, a.UnidadPresupuestal AS UnidadPre FROM Requisiciones2023 a INNER JOIN DepartamentoSolicitante b on a.idDepartamentoSolicitante = b.idDepartamentoSolicitante INNER JOIN Proyecto c on a.idProyecto = c.idProyecto INNER JOIN FuenteFinanciamiento d on a.idFuenteFinanciamiento = d.idFuenteFinanciamiento  INNER JOIN Convenios e on a.idConvenio = e.idConvenio INNER JOIN catCategorias f on a.idcatCategoria = f.idcatCategorias INNER JOIN Usuarios g on a.idUsuario = g.idUsuario INNER JOIN servicioExterno h on a.idServicioExterno = h.idServicioExterno INNER JOIN catcLicitaciones j on a.idLicitacion = j.idLicitacion INNER JOIN movdRequisiciones2023FormAdq k on a.idRequisiciones2023 = k.idRequisiciones2023 WHERE a.idRequisiciones2023 = '$id'";

  //echo $sqlinfo;
$result = $conexion->query($sqlinfo);
if ($result->num_rows > 0) {
}
$row = $result->fetch_array(MYSQLI_ASSOC);

$unidadAdministrativa = $row['UnidadAdministrativa'];

$departamentoSolicitante = $row['descripcionUnidadPresupuestal'];
$proyecto = $row['Proyecto'] . ' - ' . $row['descripcionProyecto'];
$fuente = $row['FuenteFinanciamiento'] . ' - ' . $row['descripcionFuenteFinanciamiento'];
$UnidadPresupuestal = $row['UnidadPre'];
$conveniosss = $row['Convenio'] . ' - ' . $row['descripcionConvenio'];
$categorias = $row['DescripcionCategoria'];

$motivos = $row['motivoSolicitud'];
$solicitantePrint = $row['PrimerNombre'] . ' ' . $row['PrimerApellido'];
$servicioExterno = $row['DescripcionServicioExterno'];
$ObservacionesFormAdq = $row['ObservacionesFormAdq'];

$Folio = $row['Folio'];




$hoy = getdate();
$d = $hoy['mday'];
  $m = $hoy['mon'];
  $y = $hoy['year'];

    $d2= date("d");
    $m2= date("m");
    $y2= date("y");

$FechaEnvio = "$y-$m2-$d2";



$myDateTime = DateTime::createFromFormat('Y-m-d', $FechaEnvio);
$newDateString = $myDateTime->format('d/M/Y');
$editable = $row['EstatusRequi'];

$Licitacion = $row['Licitacion'] . ' ' . $row['descripcionLicitacion'];


$dia = substr($newDateString,0,2);
$mes = substr($newDateString,3,3);
$ano = substr($newDateString,-4,4);


$username = $_SESSION['username'];



  switch ($username) {
              case 'lrvaldez':
                  $NombreRealizo = 'ING. LUIS RAFAEL VALDEZ SANTIESTEBAN';
                 // $Firma = "";
                break;
            
                case 'mfloresd':
                  $NombreRealizo = 'M.A. MARITZA FLORES DÍAZ DE LEÓN';
                 // $Firma = "maritza-firma02.png";
                  break;
            
                  case 'raramire':
                    $NombreRealizo = 'M.A. ROCÍO ALEJANDRA RAMÍREZ LIRA';
                   // $Firma = "rocio-firma01.png";
                    break;
            
                    case 'oaperez':
                    $NombreRealizo = 'M.A. OSKAR ARTURO PÉREZ OCHOA';
                     // $Firma = "";
                      break;
            
                      case 'caguilar':
                      $NombreRealizo = 'LIC. CLAUDIA AGUILAR';
                      ///  $Firma = "";
                        break;
            
            
              default:
                  $NombreRealizo = 'INDEFINIDO';
                break;
            }
            







// $sql = "SELECT * FROM movdRequisiciones2023 a INNER JOIN catcUnidadesMedida b on a.idcatcUnidadesMedida = b.idcatcUnidadesMedida INNER JOIN catcProductos c on a.idProducto = c.idProducto WHERE a.idRequisiciones2023 = $id";
// $resultado = $conexion->query($sql);



// imprecion de variables



//echo $sql;

// while ($row = $resultado->fetch_assoc()) {

//     echo '





//              <tr class="even pointer">

//              <td class=" ">' . $row["idObjetoGasto"] . '</td>
//              <td class=" ">' . $row["Cantidad"] . '</td>
//              <td class=" ">' . $row["descripcionUnidadMedida"] . '</td>
//              <td class=" ">' . $row["descripcionProducto"] . '</td>

//              </td>
//            </tr>


//            ';
// }

  ?>







  <?php //  ?>



  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

<style>

.motivos {
  width: 230px; 
  word-wrap: break-word;

}

.fuente {
  width: 150px; 
  word-wrap: break-word;

}

.proyecto {
  width: 50px; 
  word-wrap: break-word;


}

.firma {
  width: 100px; 
  word-wrap: break-word;
  text-align: center;


}

.firma2 {
  width: 600px; 
  word-wrap: break-word;
  text-align: center;


}
</style>
  </head>
  <body>

  <p style=" position: absolute; top: 55px; left: 550px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 14px;"> <?php echo $dia?></p>
  <p style=" position: absolute; top: 55px; left: 590px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 14px;"> <?php echo $mes?></p>
  <p style=" position: absolute; top: 55px; left: 640px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 14px;"> <?php echo $ano?></p>


  <p class="firma" style=" position: absolute; top: 860px; left: 50px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 8px;"> <?php echo $NombreRealizo;?></p>
  <p class="firma" style=" position: absolute; top: 900px; left: 30px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 10px;"> <?php echo 'REQUI-F: '.$id;?></p>
  <p class="firma" style=" position: absolute; top: 860px; left: 220px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 8px;"> M.A.R.H BLANCA AURELIA CARILLO DOMÍNGUEZ</p>
  <p class="firma" style=" position: absolute; top: 860px; left: 400px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 8px;"> M.I. ADRIÁN ISAAC ORPINEL UREÑA</p>
  <p class="firma" style=" position: absolute; top: 860px; left: 580px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 8px; text-transform: uppercase;"> Lic. Albayris Unzueta Máynez</p>
  <p class="firma2" style=" position: absolute; top: 780px; left: 100px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 15px; text-transform: uppercase;"> <?php echo $ObservacionesFormAdq;?></p>




    <p style=" position: absolute; top: 85px; left: 165px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 14px;"> <?php echo $unidadAdministrativa.' - FACULTAD DE INGENIERÍA';?></p>
    <p style=" position: absolute; top: 105px; left: 165px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 14px;"> <?php echo $departamentoSolicitante;?></p>
    <p class="motivos"style=" position: absolute; top: 125px; left: 165px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 13px;"> <?php echo $motivos;?></p>
    <p class="fuente"style=" position: absolute; top: 125px; left: 430px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 13px;"> <?php echo $fuente;?></p>
    <p class="proyecto"style=" position: absolute; top: 120px; left: 550px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 9px;"> <?php echo $proyecto;?></p>
    <p style=" position: absolute; top: 120px; left: 620px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 15px;"> <?php echo $unidadAdministrativa;?></p>
    <p style=" position: absolute; top: 120px; left: 680px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 15px;"> <?php echo $UnidadPresupuestal;?></p>

    <p style=" position: absolute; top: 900px; left: 680px; color: black; height: 0%; font-family: 'Roboto', sans-serif; font-size: 10px;"> <?php echo 'Folio: '.$Folio;?></p>

    <table style="position: absolute; top: 230px; left: 80px; color: black;  font-family: 'Roboto', sans-serif; font-size: 14px;">

    <?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";
$db_name = "Compras3";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM movdTempRequiMIX  WHERE idRequisiciones2023 = $id";
$resultado = $conexion->query($sql);

//echo $sql;

while ($row = $resultado->fetch_assoc()) {

    echo '





             <tr class="even pointer">

             <td >' . $row["idObjetoGasto"] . '01</td>
      
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td class=" ">' . $row["Cantidad"] . '</td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td class=" ">' . $row["unidadMedidaTraducida"] . '</td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td ></td>
             <td style="font-size: 8px;">' . $row["descripcionProductoRequi"] . '</td>

             </td>
           </tr>


           ';
}
    ?>


    
    </table>
    
  </body>
  </html>