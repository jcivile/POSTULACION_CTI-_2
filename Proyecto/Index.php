
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
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
        Login
      </div>
      <nav>
          <a href="">Datos Personales</a>
          <a href="mostrar.php">TB datos personales</a>
          <a href=""></a>
          <a href="">Acerca de nosotros</a>
      </nav>
    </div>
  </header>  

 
  <div class="espacio-formulario">
  <!---------------------------------------------->
        <div class="modal-body modal-dialog">
            <div class="container col-lg-11">
                <div class="modal-content col-lg-9 bg-dark">
                    <!-----botones de cambio-->
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!------------hasta aqui-->--
                        <br>
                       
                <h1 class="text-center blanco"  >Login</h1>
    <!-------------------formulario----------------------------------->
                <form class="text-center bg-dark"  method="POST" >
                    
                    <div class="mb-3"><br>

                      <label for="email" class="form-label blanco"  >Email</label>
                      <input type="text" class="form-control  bg-light" name="email" id="email" >

                    </div>
                    

                    <div class="mb-3"><br>

                      <label for="password" class="form-label blanco">Contraseña</label>
                      <input type="Password" class="form-control  bg-light" name="password" id="password" >

                      </div>

                      <td><input type="submit" id="loginsubmit" class="btn btn-success" value="Login">

                    <!--<button type="submit" onclick="mostrar.php" class="btn btn-success" >Ingresar</button> -->
                    </form><br>
                  <!-----------hasta aqui form----------------------->
            </div>
            </div> 
        </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

</body>
</html>