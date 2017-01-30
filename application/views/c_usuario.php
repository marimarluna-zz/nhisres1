<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Usuarios</title>

<style type="text/css">
form {float:right;}
</style>

    <!-- Bootstrap -->
    
    <link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
/*funcion ajax que llena el combo dependiendo de la categoria seleccionada*/

</script>

  </head>
  
  <body>
  
  <h1 align="Center"><B><BIG>Menu de usuarios</BIG></B></h1>

<br><br>

    <div class="row" style="margin-left:-20%">
      
      <div class="col-sm-4">
        <form action="<?php echo base_url(); ?>paciente_controller/tabla" method="POST">
              <div>
                 <button class="btn btn-lg btn-danger" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Busqueda de Pacientes </button>
                    <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                   <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                  <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                   <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control"> 
              </div>
        </form>
      </div>

      <div class="col-sm-4">
        <form action="<?php echo base_url(); ?>paciente_controller/tabla" method="POST">
              <div>
                 <button class="btn btn-lg btn-danger btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Busqueda de Pacientes </button>
                    <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                   <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                  <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                   <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control"> 
              </div>
        </form>
      </div>

      <div class="col-sm-4">
      <form action="<?php echo base_url(); ?>paciente_controller/tabla" method="POST">
              <div>
                 <button class="btn btn-lg btn-danger btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Busqueda de Pacientes </button>
                    <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                   <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                  <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                   <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control"> 
              </div>
        </form>
        
      </div>


    </div>






    <script src="<?= base_url().'assents/js/bootstrap.min.js'?>"></script>

    <script src="<?= base_url().'assents/js/jquery.js'?>"></script>
  </body>
</html>
