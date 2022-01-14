<?php

	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/lib/Session.php');
	Session::init();
	include_once ($filepath.'/lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";

	});
	//$db = new Database();
	//$fm = new Format();
	//$usr = new User();
	$exm = new Exam();
	//$pro = new Process();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");


$number = (int) $_GET['id'];
$talleres = $exm->getTaller($number);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
    <script class="jsbin" src="js/jquerymin/jquery.min.js"></script>
    <title>Form</title>
</head>
<body>
    
  <header class="enca">
    <div class="wrap"> 
      <div class=" logos">
        DATOS PERSONALES
      </div>
      <nav>
          <a href="DatosPersonales.php">Datos Personales</a>
          <a href="mostrar.php">Tabla</a>
          <a href="">contactos</a>
          <a href="">Acerca de nosotros</a>
      </nav>
    </div>
  </header>

  <div class="espacio-tabla">

  <form action="#">
  
  <div class="mb-3 mt-3">
    <label for="id" class="form-label">ID:</label>
    <input type="id" class="form-control" id="id" placeholder="ID" name="id" value=" <?php  echo $talleres['ID']    ?> " >
  </div>

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="nombre" class="form-control" id="nombre" placeholder="nombre" name="nombre" value=" <?php  echo $talleres['Nombre']    ?> ">
  </div>
  
  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido:</label>
    <input type="apellido" class="form-control" id="apellido" placeholder="apellido" name="apellido" value=" <?php  echo $talleres['Apellido']    ?> ">
  </div>

  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono:</label>
    <input type="telefono" class="form-control" id="telefono" placeholder="telefono" name="telefono" value=" <?php  echo $talleres['Telefono']    ?> ">
  </div>

  <div class="mb-3">
    <label for="direccion" class="form-label">Direccion:</label>
    <input type="direccion" class="form-control" id="direccion" placeholder="direccion" name="direccion" value=" <?php  echo $talleres['Direccion']    ?> ">
  </div>

  <div class="mb-3">
    <label for="FechaN" class="form-label">Fecha_Nacimiento:</label>
    <input type="FechaN" class="form-control" id="fechaN" placeholder="fechaN" name="fechaN" value=" <?php  echo $talleres['Fecha_Nacimiento']    ?> ">
  </div>

  <button type="submit" class="btn btn-primary" name="editar" id="editar">Editar</button>
    <label for="state" name="state" id="state"></label>


    
</form>

 <!-- <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion </th>
      <th scope="col">Fecha_Nacimiento </th>
      <th scope="col">Accion</th>
  -->
    </div>
    

        <!------------------->


        <!-------------------->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 

</body>
</html>