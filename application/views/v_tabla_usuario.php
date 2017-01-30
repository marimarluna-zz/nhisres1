<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<script type="text/javascript">
<!--
 
$(document).ready( function() {
        $('#mensaje').delay(4000).fadeOut();
      });
//-->
</script>


<link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">
<title>Lista Usuarios</title>
</head>

<body>



<br>

<div class="container">
    <div class="row">

    <div class="col-sm-6">
        <h1 align="center"><b>Crear Usuario</b></h1>






        <form>

            <div class="row">
              <div class="col-sm-5 col-md-offset-2 form-group">
                <label>ID</label>
                <input type="text" id="nombre" onkeyup="this.value=this.value.replace(/[^a-z A-ZñÑ]/g,'');" name="nombre" placeholder="Nombre" class="form-control">
              </div>
              <div class="col-sm-5 form-group">
                <label>Tipo</label>
                <input type="text" id="apellido" onkeyup="this.value=this.value.replace(/[^a-z A-ZñÑ]/g,'');" name="apellido" placeholder="Apellido" class="form-control">
              </div> 
            </div>
               <div class="row">
              

               <label style="margin-left:20%">Cedula</label>
           <label style="margin-left:32%">Telefono</label>
           <br>
              <div class="col-sm-2 col-sm-offset-2 form-group">
          <select name="n" id="n" class="form-control">
              <option value="V" >V</option>
              <option value="E" >E</option>
              </select>
          </div>
          <div class="col-sm-3 form-group">
                <input type="number" min="0" id="ci_paciente" name="ci_paciente" placeholder="Cedula" class="form-control">
          </div>
              <div class="col-sm-5 form-group">
               
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="form-control">
              </div> 
                </div>


              <div class="col-sm-12">
              <div class="col-sm-12 col-md-offset-2 form-group">
                <div class="col-sm-4 form-group">
                <label>Dirección</label>
                <input type="text" id="direccion" name="direccion" placeholder="Direccion" class="form-control">
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

        <div class="col-sm-6">
                <h1 align="center"><b>Lista de Usuarios</b></h1>
                <form name="form_prueba" action="<?= base_url().'usuario_controller/buscar_t'?>" method="POST">
                    <div class=" col-sm-6 ">
                        <input type="text" placeholder="Buscar por id/username/perfil" id="busqueda" name="busqueda" class="form-control col-sm-2" required> 
                    </div>
                    <div class="col-sm-4 form-group">
                        <select requird class="form-control " name="filtro" id="filtro">
                            <option value="id" >ID</option>
                            <option value="username" >Usuario</option>
                            <option value="perfil" >Perfil</option>
                            
                       </select>
                  </div>
																	
																	<input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
					<input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
					<input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
					<input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 

                    <div class="row col-sm-1"> 
                        <button type="submit" value='login' name="datos" class="btn btn-success" > <span class="glyphicon glyphicon glyphicon-search"> </span></button>
                    </div>
                </form>
                <form action="<?php echo base_url(); ?>especialista_controller/tabla">
																	
																	<input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
					<input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
					<input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
					<input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 

																	
                    <div class="col-sm-1 col-md-offset-1" style="margin-top:-3%"> 
                            <button type="submit" value='login' name="datos" class="btn btn-danger" > Limpiar </button>
                    </div>
                </form>
            <table class="table table-striped table-hover" cellpadding="60">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>username</th>
                        <th>Perfil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
                    <tr>
                        <td><?php echo $deptlist[$i]->id; ?></td>
                        <td><?php echo $deptlist[$i]->username; ?></td>
                        <td><?php echo $deptlist[$i]->perfil; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 text-right">
            <?php echo $pagination; ?>
        </div>
    </div>
</div>

</body>
</html>
