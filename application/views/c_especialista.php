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

<script type="text/javascript">
$('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g,'') ); }
);
</script>

    <title>Especialistas</title>

<style type="text/css">
form {float:right;}
</style>

    <!-- Bootstrap -->
    
    <link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	  <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>

  </head>
  
  <body>
  
  <h1 align="Center"><B><BIG>Formulario Para el registro de Especialistas </BIG></B></h1>

  <div id="mensaje">
<h3 align="center"> <?=(isset($error))?$error:''?> </h3>
</div>

  <br>
  
  <div class="row">

    <div class ="col-md-5" class="container">
      <?php echo form_open('especialista_controller/guardar'); ?>
    </div>


    <div class="container">
  <div class="col-lg-12 well">
  <div class="row">
        <form>
          <div class="col-sm-12">
            <div class="row">
		 	
              <div class="col-sm-4 col-sm-offset-2 form-group">
                <label>Nombre</label>
		<input type="text" id="nombre" onkeyup="this.value=this.value.replace(/[^a-z A-ZñÑ]/g,'');" name="nombre" placeholder="Nombre" class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Apellido</label>
                <input type="text" id="apellido" onkeyup="this.value=this.value.replace(/[^a-z A-ZñÑ]/g,'');" name="apellido" placeholder="Apellido" class="form-control">
              </div> 
            </div>
              <div class="row">
		      

               <label style="margin-left:18%">Cedula</label>
	       <label style="margin-left:30%">Telefono</label>
	       <br>
              <div class="col-sm-1 col-sm-offset-2 form-group">
	      <select name="n" id="n" class="form-control">
		      <option value="V" >V</option>
		      <option value="E" >E</option>
              </select>
	      </div>
	      <div class="col-sm-3 form-group">
                <input type="number" min="0" id="ci_especialista" name="ci_especialista" placeholder="Cedula" class="form-control">
	      </div>
              <div class="col-sm-4 form-group">
               
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="form-control">
              </div> 
                </div>

              <div class="col-sm-12">
              <div class="col-sm-12 col-md-offset-2 form-group">
                <div class="col-sm-4 form-group">
                <label>Socio</label>
                <input type="text" id="socio" name="socio" placeholder="socio" class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Ubicacion</label>
                <input type="text" id="ubicacion" name="ubicacion" placeholder="Ubicacion" class="form-control">
              </div> 
                </div>
                </div>

              <div class="col-sm-12">
              <div class="col-sm-12 col-md-offset-2 form-group">
                <div class="col-sm-4 form-group">
                <label>Especialización</label>
                <input type="text" id="especializacion" name="especializacion" placeholder="especializacion" class="form-control">
              </div>
              </div>
              </div>

              <div class="col-sm-12">
              <div class="col-sm-12 col-md-offset-2 form-group">
                <div class="col-sm-4 form-group">
                <label>Nombre de Usuario</label>
                <input type="text" id="username" name="username" placeholder="username" class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Contraseña</label>
                <input type="password" id="password" name="password" placeholder="****" class="form-control">
              </div> 
                </div>
                </div>
								
								<input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >

              <br><br>
              <div align="center">
                <button class="btn btn-lg btn-info" type="submit" name="submit" id="MyBtn" value="login"><span class="glyphicon glyphicon-check"></span>  Guardar </button>       
              </div>          
          </div>
        </form> 
        </div>
  </div>
  </div>



  </div>

    <script src="<?= base_url().'assents/js/bootstrap.min.js'?>"></script>

    <script src="<?= base_url().'assents/js/jquery.js'?>"></script>
  </body>
</html>
