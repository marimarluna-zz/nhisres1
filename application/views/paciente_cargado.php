<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Departamentos en el sistema</title>

      <link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />


 </head>



 <body>


    <h1 align="center"><b>Datos cargados exitosamente</b></h1>
    <br>
   


      <div class="container">
        <div class="row">
            <form action="<?php echo base_url(); ?>paciente_controller/tabla" method = "POST">
              <div class="col-sm-4 col-md-offset-4 " >
                 <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Ver lista de Pacientes </button>
															<input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
		      					  <input style = "display:none"  type="text" id="ci_paciente" name="ci_paciente" value="<?php echo $ci_paciente; ?>"  class="form-control" >
		     
              </div>
            </form>
            </div>
      </div> 

      <br><br><br>

      <div class="container">
        <div class="row">
            <form action="<?php echo base_url(); ?>paciente_controller/ver"  method="POST">
              <div class="col-sm-4 col-md-offset-4 " >
                 <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Agregar Informe </button>
															<input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
		      					  <input style = "display:none"  type="text" id="ci_paciente" name="ci_paciente" value="<?php echo $ci_paciente; ?>"  class="form-control" >
		       
              </div>
            </form>
            </div>
      </div> 



    <script src="<?= base_url().'assents/js/jquery.js'?>"></script>
  <script src="<?= base_url().'assents/js/bootstrap.min.js'?>"></script>

 </body>
</html>
