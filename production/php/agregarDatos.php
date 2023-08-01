<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$NoEmpleado=$_POST['NoEmpleado'];
	$PrimerNombre=$_POST['PrimerNombre'];
	$PrimerApellido=$_POST['PrimerApellido'];
	$Centro=$_POST['Centro'];
    $Usuario=$_POST['Usuario'];
    $Password=$_POST['Password'];
    $Nivel=$_POST['Nivel'];
    $FechaCreacion=$_POST['FechaCreacion'];
    $Codigo=$_POST['Codigo'];
    $Correo=$_POST['Correo'];

    
    //echo 'hihi'.$_POST['$NoEmpleado'];


	$sql="INSERT into Usuarios ( IdUsuario,
    NoEmpleado,
    PrimerNombre,
    PrimerApellido,
    Centro,
    Usuario,
    Password,
    Nivel,
    FechaCreacion,
    Codigo,
    Extension,
    Correo)
	values ('$NoEmpleado','$PrimerNombre','$PrimerApellido','$Centro','$Usuario','$Password','$Nivel','$FechaCreacion','$Codigo','$Correo')";
	echo $result=mysqli_query($conexion,$sql);
    //echo 	$sql;

 ?>