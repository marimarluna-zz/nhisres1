<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#prueba").click(function(){
        $("#t_prueba").toggle();
    });
});
</script>


<link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">

<title>Modulo Especialistas</title>
</head>

<body>



<button id="prueba" class="btn btn-info" style="margin-left:5%">Formulario para especialista</button>
<a href="#myModal" class="btn btn-primary" data-toggle="modal">Crear Nueva Receta<span class="glyphicon glyphicon-apple"></span></a>


<div id="mensaje"><h3 align="center"><?=(isset($error))?$error:''?></h3></div>


<br>

<div class="container">
    <div class="row" style="margin-left:-5%">

    <div class="col-sm-6" id="t_prueba" style="display:none">

        <h1 align="center"><b>Crear Especialistas</b></h1>
        <form name="form_prueba" action="<?= base_url().'especialista_controller/guardar'?>" method="POST">

            <div class="row">
              <div class="col-sm-5 col-sm-offset-1 form-group">
                <label>Nombre</label>
                <input type="text" id="nombre" onkeyup="this.value=this.value.replace(/[^a-z A-ZñÑ]/g,'');" name="nombre" placeholder="Nombre" class="form-control" required>
              </div>
              <div class="col-sm-5 form-group">
                <label>Apellido</label>
                <input type="text" id="apellido" onkeyup="this.value=this.value.replace(/[^a-z A-ZñÑ]/g,'');" name="apellido" placeholder="Apellido" class="form-control" required="">
              </div>
            </div>
            <div class="row">
              

           <label style="margin-left:12%">Cedula</label>
           <label style="margin-left:32%">Telefono</label>
           <br>
              <div class="col-sm-2 col-sm-offset-1 form-group">
          <select name="n" id="n" class="form-control">
              <option value="V" >V</option>
              <option value="E" >E</option>
              </select>
          </div>
          <div class="col-sm-3 form-group">
                <input type="number" id="ci_especialista" name="ci_especialista" placeholder="Cedula" class="form-control">
          </div>
              <div class="col-sm-5 form-group">
               
                <input type="number" id="telefono" name="telefono" placeholder="Telefono" class="form-control">
              </div> 
                </div>

               <div class="row">
              <div class="col-sm-5 col-md-offset-1 form-group">
                <label>Especialidad</label>
                <select requird class="form-control" name="especializacion" id="especializacion" required="">
                                  <option disabled="disabled">Especialidades</option>
                                    <?php 
                                    foreach($especialidades as $e)
                                    { 
                                      echo '<option value="'.$e->nombre.'"> '. $e->nombre . '</option>';
                                    }
                                    ?>
                                  </select>
              </div>
              <div class="col-sm-5 form-group">
                <label>Socio</label>
                <input type="text" id="socio" name="socio" placeholder="Socio" class="form-control" required="">
              </div> 
            </div>


              <div class="col-sm-12">
              <div class="col-sm-12 form-group">
                <div class="col-sm-12 form-group">
                <label>Ubicacion</label>
                <input type="text" id="ubicacion" name="ubicacion" placeholder="Direccion" class="form-control" required="">
              </div>
                                
              </div>
                                <input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                              <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                              <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                              <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
              </div>

              <br><br>
              <div align="center">
                <button class="btn btn-lg btn-info" type="submit" name="submit" id="MyBtn" value="login"><span class="glyphicon glyphicon-check"></span>  Guardar </button>       
              </div>          

        </form> 

        
    </div>

        <div class="col-md-6">
        <h1 align="center"><b>Lista de Especialistas</b></h1>
                <form name="form_prueba" action="<?= base_url().'especialista_controller/buscar_t'?>" method="POST">
                    <div class=" col-md-6 ">
                        <input type="text" placeholder="Buscar por Nombre/Apellido/Cedula/Socio" id="busqueda" name="busqueda" class="form-control col-sm-2" required> 
                    </div>
                    <div class="col-sm-4 form-group">
                        <select requird class="form-control " name="filtro" id="filtro">
                            <option value="nombre" >Nombre</option>
                            <option value="apellido" >Apellido</option>
                            <option value="ci_especialista" >Cedula</option>
                            <option value="especializacion" >Especializacion</option>
                       </select>
                  </div>
                    <div class="row col-sm-1"> 
                        <button type="submit" value='login' name="datos" class="btn btn-success" > <span class="glyphicon glyphicon glyphicon-search"> </span></button>
                    </div>
							  <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
							  <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
							  <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
							  <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
                </form>
                <form action="<?php echo base_url(); ?>especialista_controller/tabla" method="POST">
                    <div class="col-sm-1 col-md-offset-1" style="margin-top:-3%"> 
                            <button type="submit" value='login' name="datos" class="btn btn-danger" > Limpiar </button>
                    </div>
							  <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
							  <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
							  <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
							  <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
                </form>
            <table class="table table-striped table-hover" cellpadding="60">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Especializacion</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
                    <tr>
                        <td><?php echo $deptlist[$i]->nombre; ?></td>
                        <td><?php echo $deptlist[$i]->apellido; ?></td>
                        <td><?php echo $deptlist[$i]->ci_especialista; ?></td>
                        <td><?php echo $deptlist[$i]->telefono; ?></td>
                        <td><?php echo $deptlist[$i]->especializacion; ?></td>
                        <td><div class="col-md-12"> 
                                <form name="form_prueba" action="<?= base_url().'especialista_controller/buscar'?>" method="POST">
                                    <div class="" style="display:none">
                                        <input type="text" min="1" id="ci_especialista" name="ci_especialista" value="<?php echo $deptlist[$i]->ci_especialista;?>" class="form-control col-sm-2"> 
                                    </div>
					<input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
					<input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
					<input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
					<input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 
                                    <div class="row col-sm-3" style="margin-left:5%"> 
                                        <button type="submit" value='login' name="datos" class="btn btn-success" > <span class="glyphicon glyphicon-user"> </span></button>
                                    </div>
                                </form>
                            </div>     
                        </td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="row" id="prueba_2">
        <div class="col-md-10 text-center">
            <?php echo $pagination; ?>
        </div>
    </div>
        </div>
    </div>
    
</div>


  <div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Formulario para el registro de recetas</h4>
      </div>
      <div class="modal-body">

        <form name="form_prueba" action="<?= base_url().'recetas_controller/guardar'?>" method="POST">

          <div class="row"> 
            <div class="col-sm-8 col-sm-offset-2">
              <label>Nombre de la Receta</label>
              <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" required>
            </div>
          </div>
          <br>
          <div class="row">  
            <div class="col-sm-4 col-sm-offset-2">
              <label>Precio</label>
              <input type="text" id="precio" name="precio" placeholder="Precio" class="form-control" required>
            </div>
            <div class="col-sm-4">
              <label>Servcio</label>
              <select class="form-control" name="entrada" id="entrada">
                <option value="cocina">Cocina</option>
                <option value="bar">Bar</option>
              </select>
            </div>
          </div>
   
          <br>
          <div class="row">

            <div class="col-sm-2 col-sm-offset-5">
              <button type="submit" value='login' name="datos" class="btn btn-primary" > <span class="glyphicon glyphicon-floppy-disk"> </span> Crear</button>
            </div>

          </div>
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>
