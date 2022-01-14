<?php
$filepath = realpath(dirname(__FILE__));

include_once ($filepath.'/classes/User.php');
$usr = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id=$_POST['id'];

	$userregi = $usr->EliminarDatos($id);

echo $userregi;

//	header("location:mostrar.php");


}


?>