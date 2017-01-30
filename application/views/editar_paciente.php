<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <script type="text/javascript">
<!--
 
$(document).ready( function() {
        $('#mensaje').delay(4000).fadeOut();
      });
//-->
</script> 

    <title>Cloud</title>

    <!-- Bootstrap -->
    
    <link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
/*funcion ajax que llena el combo dependiendo de la categoria seleccionada*/

</script>

  </head>
  
  <body>

     <div class"row">

     <!-- Este es el formulario para editar los registros, fijate como se llaman utilizando codigo php y la etiqueta datos que viene del controlador que llama a la vista -->   


    <div class="container">
  <div class="col-lg-8 col-lg-offset-2 well">
<dir class ="row">
        <form name="form_porcion" action="<?= base_url().'paciente_controller/editar'?>" method="POST">
          <div class="row">

            <!-- aqui puedes ver como cada uno de los campos en el formulario tomo un registro de la bd con el siguiente comando: <?php echo $datos->campo; ?> sustituyendo lo que dice campo con el campo de la BD  -->
            <div class="col-sm-6">
              <label>Nombre</label>
              <input type="text" id="nombre" name="nombre" value="<?php echo $datos->nombre; ?>"  class="form-control" required>
            </div>
            <div class="col-sm-6">
              <label>Apellido</label>
              <input type="text" id="apellido" name="apellido" value="<?php echo $datos->apellido; ?>"  class="form-control" required>
            </div>
          </div>

          <br>
          
            <div class="row"> 
            <div class="col-sm-6">
              <label>Cedula</label>
              <!-- es campo tiene la opcion readonly como propiedad, al ser el identificador del registro no deberias dejar que lo editaran-->
              <input type="text" id="cedula" readonly name="cedula" value="<?php echo $datos->ci_paciente; ?>"  class="form-control" required>
            </div>
            <div class="col-sm-6">
              <label>Telefono</label>
              <input type="text" id="telefono" name="telefono" value="<?php echo $datos->telefono; ?>"  class="form-control" required>
            </div>
          </div>
          <br>
					
					<input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
					<input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
					<input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
					<input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 

          <div class="row"> 
            <div class="col-sm-8 col-sm-offset-2">
              <label>Direccion</label>
              <input type="text" id="direccion" name="direccion" value="<?php echo $datos->direccion; ?>"  class="form-control" required>
            </div>
          </div>
          <br>

            <br><br>
          <div class="col-sm-offset-4">
                <button class="btn btn-lg btn-danger" type="submit" value='login' name="datos"> Editar Datos <span class="glyphicon glyphicon-file"></span></button></button>
          </div>  
  </div>
  </div>

  </form>

  </div>

    <script src="<?= base_url().'assents/js/bootstrap.min.js'?>"></script>

    <script src="<?= base_url().'assents/js/jquery.js'?>"></script>



  </body>
</html>
