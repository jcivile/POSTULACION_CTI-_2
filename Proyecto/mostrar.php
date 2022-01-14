<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">

    <title>Form</title>
</head>
<body>
    
  <header class="enca">
    <div class="wrap"> 
      <div class=" logos">
        DATOS PERSONALES
      </div>
      <nav>
          <a href="index.html">Inicio</a>
          <a href="mostrar.php">Tabla</a>
          <a href="">contactos</a>
          <a href="">Acerca de nosotros</a>
      </nav>
    </div>
  </header>

        <!------------------->
<div class="espacio-tabla">
        <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion </th>
      <th scope="col">Fecha Nacimiento </th>
      <th scope="col">Accion</th>

    </tr>
  </thead>
  <tbody>

<?php   
    $sql="SELECT * from datos;";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){

?>
    <tr>
      <th><?php  echo $mostrar['ID']?></th>
      <td><?php  echo $mostrar['Nombre'] ?></td>
      <td><?php  echo $mostrar['Apellido'] ?></td>
      <td><?php  echo $mostrar['Telefono'] ?></td>
      <td><?php  echo $mostrar['Direccion'] ?></td>
      <td><?php  echo $mostrar['Fecha_Nacimiento'] ?></td>
      <td> <a href="editar.php?id=<?php   echo $mostrar ['ID']  ?>" class="btn btn-success" >  Editar   </a> 
      |
      <a href="eliminar.php?id=<?php   echo $mostrar ['ID']  ?>" class="btn btn-danger">  Eliminar   </a>
      
    </td>
      
     <!-- <td >     
        <form action="eliminar.php" method="post">
         
          <td>  <input type="submit" class="btn btn-Danger" value="Eliminar" name="btnEliminar"></td>
          <td>  <input type="submit" class="btn btn-success" value="Editar" name="btnEditar"></td>       
       
        </form>
      </td>
    -->
      <td>

      </td>

    </tr>
    <tr>
<?php   
    }
?>

  </tbody>
</table>
</div>

        <!-------------------->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>