<?php

ini_set('display_errors',1);

error_reporting(E_ALL);

include('db.php');

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$fecha=$_POST['txtFecha'];
$direccion=$_POST['txtDireccion'];
$telefono=$_POST['txtTelefono'];



//$consulta="INSERT INTO `usuarios` (`Nombre`, `Usuario`, `Contraseña`) 
//VALUES ( '$nombre', '$usuario', '$contraseña');";

$consulta="INSERT INTO `datos` (`Nombre`, `Apellido`, `Telefono`, `Direccion`, `Fecha_Nacimiento`) 
            VALUES ('$nombre', '$apellido', '$telefono', '$direccion', '$fecha');";

$resultado=mysqli_query($conexion,$consulta);

mysqli_close($conexion);



?> 
