<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Departamentos en el sistema</title>

      <link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">
      <link href="<?= base_url().'assents/css/datepicker.css'?>" rel="stylesheet">
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

 </head>


 <body>

    <!-- <h1 align="center"><b>Bienvenido</b></h1>

    <h2 align="center">Especialista</h2>

       <DIV align="center" class="col-md-4 col-md-offset-4">
      <a><img style="max-width: 200px;" src="<?=base_url().'assents/img/0012.png'?>"></a>
   
   </DIV>


<BR><BR><BR><BR><BR>


      <div class="container">
        <div class="row">
            <form action="<?php echo base_url(); ?>paciente_controller/tabla" method="POST">
              <div class="col-sm-4 col-md-offset-4 " >
                 <button class="btn btn-lg btn-danger btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Busqueda de Pacientes </button>
             				<input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
																 <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
		 														<input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
																 <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 
													</div>
            </form>
            </div>
      </div>  

<BR>

      <div class="container">
        <div class="row">
            <form action="<?php echo base_url(); ?>paciente_controller" method="POST">
              <div class="col-sm-4 col-md-offset-4 " >
                 <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Registrar Paciente </button>
																<input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
																 <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
		 														<input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
																 <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 
              </div>
            </form>
            </div>
      </div> -->


      <div class="container">
        <div class="col-sm-6" style="margin-top:5%">
          <h1 align="center"><b>Bienvenido</b></h1>
          <h2 align="center">Especialista</h2>
          <a><img style="max-width: 1200px; margin-left:17%; margin-top:-5%" src="<?=base_url().'assents/img/0012.png'?>"></a>
        </div>

        <div class="col-sm-6">

        <div class="row">
        <div class="col-sm-6">
        <a><img style="max-width:200px; margin-left:17%" src="<?=base_url().'assents/img/lista.png'?>"></a>
        </div>
        <div class="col-sm-6" style="margin-top:15%">
        <form action="<?php echo base_url(); ?>paciente_controller" method="POST">
              <div>
                 <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Registrar Paciente </button>
                                <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                                 <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                                <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                                 <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 
              </div>
            </form>
            </div>
            </div>

            <br><br><br>

            <div class="row">
            <div class="col-sm-6">
              <a><img style="max-width:200px; margin-left:17%" src="<?=base_url().'assents/img/search.png'?>"></a>
            </div>
            <div class="col-sm-6"  style="margin-top:15%">
            <form action="<?php echo base_url(); ?>paciente_controller/tabla" method="POST">
              <div>
                 <button class="btn btn-lg btn-danger btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Busqueda de Pacientes </button>
                    <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                                 <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                                <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                                 <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 
                          </div>
            </form>
            </div>
            </div>
      </div>  
          
        </div>

      </div>


  
    <script src="<?= base_url().'assents/js/jquery.js'?>"></script>
  <script src="<?= base_url().'assents/js/bootstrap.min.js'?>"></script>

 </body>
</html>
