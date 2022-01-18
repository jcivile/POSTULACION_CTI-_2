<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Form</title>
</head>
<body>
    
  <header class="enca">
    <div class="wrap"> 
      <div class=" logos">
        DATOS ACADEMICOS
      </div>
      <nav>
          <a href="DatosPersonales.php">Datos Personales</a>
          <a href="mostrar.php">TB datos personales</a>
           <a href="">Datos Academicos</a>
          <a href="muestraAcademia.php">TB datos Academicos</a>
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
                       
                <h1 class="text-center blanco"  >Datos Academicos</h1>
    <!-------------------formulario----------------------------------->
                <form class="text-center bg-dark" action="registro.php" method="POST" >
                    
                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Logro</label>
                      <input type="text" class="form-control  bg-light" name="txtLogro" >

                    </div>
                    <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Diploma</label>
                        <input type="text" class="form-control bg-light " name="txtDiploma" >

                      </div>
                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Año de registro</label>
                        <input type="text" class="form-control bg-light " name="txtFechaR" >

                        </div>

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Titulo de programa</label>
                        <input type="text" class="form-control bg-light " name="txtTitulo" >
                        </div>

                        <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Institucion</label>
                        <input type="text" class="form-control bg-light " name="txtInstitucion" >

                        <div id="emailHelp" class="verde">Verifique los datos proporcionados</div>
                      </div>


                    <button type="submit"  class="btn btn-success" >Ingresar</button>
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
</body>
</html>