<?php


// include '../ConexionDB.php';

if (isset($_SESSION['username']))
{
  $NombreUsuario = $_SESSION['username'];
}
else {
  $NombreUsuario = 'No identificado';
}

if ( ($NombreUsuario == 'lrvaldez' )   || ($NombreUsuario == 'mfloresd' )  || ($NombreUsuario == 'raramire' )  || ($NombreUsuario == 'oaperez' )    )
 {

// Administradores

  $MaterialCotizar = '';
  $Registro = '<li><a href="index.php"><i class="fa fa-area-chart"></i> Estadisticas</a></li>';
  $ConsultaAutorizacion = '<li><a href="pendienteRecibir2.php"><i class="fa fa-check-circle-o"></i> Pendientes Recibir </a></li>  <li><a href="pendienteAutorizar.php"><i class="fa fa-check-circle"></i> Pendientes Autorizar </a></li>';
  $Cotizar = '';
  $Reportes ='' ;
  $Intrucciones ='<li><a href="info.php"><i class="fa fa-question"></i> Instrucciones </a></li>';
  $Busqueda ='<li><a href="busqueda.php"><i class="fa fa-search"></i> Busqueda </a></li>';
  $Historico ='<li><a href="capturaOC.php"><i class="fa fa-briefcase"></i> Captura OC </a></li>
  <li><a href="editableUsuarios.php"><i class="fa fa-pencil"></i>Editar Requis </a></li>
  <li><a href="editableProductos.php"><i class="fa fa-pencil"></i> Estitar Catalogo </a></li>
  <li><a href="Categorias.php?id=1"><i class="fa fa-pencil"></i>Editar Categorias</a></li>';
  $Inventario =' ' ;
$ADQF = '


  <li><a href="EnviarADQUF.php"><i class="fa fa-cart-plus"></i>Enviar ADQ UF</a></li>
  <li><a href="EnviarADQUFMIX.php"><i class="fa fa-cart-plus"></i>Enviar ADQ UF MIX</a></li>




';





  //<a href="CotizarIndex.php"><i class="fa fa-cart-plus"></i>Pendientes Cotizar F</a>
}

elseif ($NombreUsuario == 'paulina' ) {

  //Paulina

  $Registro = '';
  $MaterialCotizar = '';
  $ConsultaAutorizacion = '';
  $Cotizar = '<li><a href="pendienteRecibir2.php"><i class="fa fa-check-circle-o"></i> Pendientes Recibir </a></li> ';
  $Reportes = '';
  $Intrucciones ='<li><a href="index2.php"><i class="fa fa-question"></i> Reporte</a></li>';
  $Busqueda ='<li><a href="busqueda.php"><i class="fa fa-search"></i> Busqueda </a></li>';
  $Historico ='';
  $Inventario ='';
}

else {

  //Usuarios en general

  $Registro = '<li><a href="indexLv3.php"><i class="fa fa-cloud-upload"></i> Registro</a></li>';
  $MaterialCotizar = '';
  $ConsultaAutorizacion = '<li><a href="consultaLvl3.php"><i class="fa fa-search"></i> Consulta | Autorizaciones </a></li>';
  $Cotizar = '';
  $Reportes = '';
  $Intrucciones ='<li><a href="info.php"><i class="fa fa-question"></i> Instrucciones</a></li>';
  $Busqueda ='';
  $Historico ='';
  $Inventario ='<li><a href="TablaCLimpieza2023.php"><i class="fa fa-paint-brush"></i> Tabla Art-Limp PT-1 </a></li><li><a href="TablaCLimpieza20232.php"><i class="fa fa-magic"></i> Tabla Art-Limp PT-2 </a></li><li><a href="TablaCafeteria2023.php"><i class="fa fa-coffee"></i> Tabla Cafeteria PT-3 </a></li><li><a href="TablaPapeleria2023.php"><i class="fa fa-book"></i> Tabla Papeleria PT-1 </a></li><li><a href="TablaPapeleria22023.php"><i class="fa fa-book"></i> Tabla Papeleria PT-2 </a></li>';

}

$LeftBar = '  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="#" class="site_title"> <span>ADQUISICIONES FING</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Bienvenido/a</span>
        <h2>'.$NombreUsuario.'</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">


          '.$Registro.'

          '.$ConsultaAutorizacion.'

          '.$Cotizar.'

          '.$ADQF.'

          '.$Reportes.'

            '.$MaterialCotizar.'






        </ul>
      </div>
      <div class="menu_section">
        <ul class="nav side-menu">

  '.$Historico.'
        </ul>
      </div>

      <div class="menu_section">
        <ul class="nav side-menu">
'.$Inventario.'

        </ul>
      </div>
    </div>


      <div class="menu_section">
        <ul class="nav side-menu">
        '.$Intrucciones.'

        '.$Busqueda.'

        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Salir" href="logout.php">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
      <a data-toggle="tooltip" data-placement="top" title="Salir" href="logout.php">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Salir" href="logout.php">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Salir" href="logout.php">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>'
;


 ?>
