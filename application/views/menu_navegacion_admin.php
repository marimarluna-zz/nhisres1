<html>
<head>


<style>
        .btn-link{
          border:none;
          outline:none;
          background:none;
          cursor:pointer;
          color:#FFFFFF;
          padding:0;
          font-family:italic;
          font-size:inherit;

        }
      </style>


 <div class="container-fluid">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default">
    
        <img height="13%" width="100%" src="<?=base_url().'assents/img/banner.png'?>">
      
      <div class="container" style="margin-top:-5%">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <form name="form_prueba" action="<?= base_url().'login/inicio'?>" method="POST"><input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
      <button type="submit" value='login' style="margin-top:-1%; position:absolute" name="datos" class="btn-link"><img src="<?=base_url().'assents/img/nhisres100.png'?>" style="max-width:65px"></button>    
    </form> 
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          
          <ul class="nav navbar-nav navbar-right">
            <div class="row col-sm-12">
        <div class="col-sm-2 col-sm-offset-4">
          <form name="form_prueba" action="<?= base_url().'Administrador_controller/especialistas'?>" method="POST"><input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
      <button type="submit" value='login' style="margin-top:9%" name="datos" class="btn-link">Administrar Especialistas</button>    
    </form>   
        </div>
        <div class="col-sm-2">
          <form name="form_prueba" action="<?= base_url().'Administrador_controller/asistentes'?>" method="POST"><input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
      <button type="submit" value='login' style="margin-top:9%" name="datos" class="btn-link">Administrar Asistentes</button>    
    </form>   
        </div>
        <div class="col-sm-2">
          <form name="form_prueba" action="<?= base_url().'Administrador_controller/pacientes'?>" method="POST"><input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
      <button type="submit" value='login' style="margin-top:9%" name="datos" class="btn-link">Administrar Pacientes</button>    
    </form>   
        </div>
        <div class="col-sm-1">   
          <h5><a><b><span class="glyphicon glyphicon-user"></span> <?php echo $usuario; ?></b></a></h5>
        </div>
        <div class="col-sm-1">
      <h5><a href="<?php echo base_url(); ?>login"><b><span class="glyphicon glyphicon-share-alt"></span>Salir</b></a></h5>    
        </div>
      </div>
          </ul>
    
    
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
  </div><!-- /.container-fluid -->


</head>
<body>
</body>
</html>
