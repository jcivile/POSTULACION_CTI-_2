<?php
$filepath = realpath(dirname(__FILE__));

include_once ($filepath.'/classes/User.php');
$usr = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id=$_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$fechaN=$_POST['fechaN'];
	$usuario=$_POST['usuario'];
	$password=$_POST['password']


	

	$userregi = $usr->registroDatosPersonales($id,$nombre,$apellido,$telefono,$direccion,$fechaN,$usuario,$password);

echo $userregi;

}


?>