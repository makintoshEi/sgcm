<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <title>Login Principal</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>/static/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/dataTables.bootstrap.css">
    
    
    <script src="<?php echo base_url()?>static/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url()?>static/js/header.js"></script>
    <script src="<?php echo base_url()?>static/js/alls.js"></script>
    <!--<script src="<?php echo base_url()?>static/js/usuario.js"></script>-->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>static/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>static/js/dataTables.bootstrap.js"></script>
  </head>
  <body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Control Citas Medicas</h1>
      </div>
      <div class="modal-body">
          <form id="formLogin" action="" method='post' class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" name="txtcedula" id="txtcedula" placeholder="Cedula" required="true">
            </div>
            <div class="form-group">
              <input type="password" name="txtpassword" id="txtpasssword" class="form-control input-lg" placeholder="Password" required="true">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit" >Iniciar</button>
              <span class="pull-right"><a href="<?= base_url()?>cregistro_usuario/start">Registro</a></span>
              <span><a href="#">Ayuda</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
      </div>  
      </div>
  </div>
  </div>
</div>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>