<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registro Usuario</title>
		<!-- Bootstrap -->
	    <link href="<?php echo base_url()?>/static/css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/dataTables.bootstrap.css">
	    
	    
	    <script src="<?php echo base_url()?>static/js/jquery-1.11.3.min.js"></script>
	    <script src="<?php echo base_url()?>static/js/header.js"></script>
	    <script src="<?php echo base_url()?>static/js/alls.js"></script>
	    <script src="<?php echo base_url()?>static/js/user/registro_usuario.js"></script>
	    <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>static/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>static/js/dataTables.bootstrap.js"></script>
	</head>
	<body>
		<!--<form id="formLogin" action="<?= base_url() ?>clogin/login" method='post' class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" name="txtcedula" id="txtcedula" placeholder="Cedula" requerid>
            </div>
            <div class="form-group">
              <input type="password" name="txtpassword" id="txtpasssword" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit" >Iniciar</button>
              <span class="pull-right"><a href="<?= base_url()?>Panel_Control.php">Registro</a></span><span><a href="#">Ayuda</a></span>
            </div>
        </form>-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-lg-offset-3 col-lg-8">
      		<div class="panel panel-primary">
	        	<div class="panel-heading" role="tab" id="headingThree">
	          		<h4 class="panel-title">
	            	<div class="center-block" align="center">
	              		REGISTRAR USUARIO
	            	</div>
		          </h4>
		        </div>
        
		        
			        <form id="frmUsu_save" role="" class="form-horizontal">
						<div class="row">
						    
						        <div class="panel-body">
						            <!--**************************************************** -->
						            <div class="container">
						                <div class="form-group">
						                <label class="col-lg-2 control-label">Cedula</label>
						                <div class="col-lg-5">
						                    <input class="form-control" type="text" placeholder="Cedula" name="txtcedula" id="txtcedula" maxlength="10" requerid="true">
						                </div>
						            </div>
						            <div class="row">
						                <label class="col-lg-2 control-label">Nombres</label>
						                <div class="col-lg-5">
						                    <input class="form-control" type="text" placeholder="Nombres" name="txtnombre" id="txtnombre" requerid="true">
						                </div> 
						            </div>
						            <br>
						            <div class="row">
						                <label class="col-lg-2 control-label">Apellidos</label>
						                <div class="col-lg-5">
						                    <input class="form-control" type="text" placeholder="Apellidos" name="txtapellido" id="txtapellido" requerid="true">
						                </div>
						                
						            </div>
						            <br>
						            <div class="row">    
						                <label class="col-lg-2 control-label">Direccion</label>
						                <div class="col-lg-5">
						                    <input class="form-control" type="text" placeholder="Direccion" name="txtdireccion" id="txtdireccion" requerid="true">
						                </div> 
						            </div>
						            <br>
						            <div class="row"> 
						                <label class="col-lg-2 control-label">Email</label>
						                <div class="col-lg-5">
						                    <input class="form-control" type="email" placeholder="Email" name="txtemail" id="txtemail" requerid="true">
						                </div>  
						            </div>
						            <br>
						            <div class="row">
						                <label class="col-lg-2 control-label">Password</label>
						                <div class="col-lg-5">
						                    <input class="form-control" type="password" placeholder="Password" name="txtpassword" id="txtpassword" requerid="true">
						                </div>
						                
						            </div>
						            <br>
						            <br>             
						            <!-- ************* BOTONES ***************-->
						            <div class="form-group">
						                
						                <div class="col-lg-offset-3 col-lg-12">
						                    <button class="btn btn-primary btn-lg">Guardar</button>
						                    
				                    		<a href="<?= base_url()?>clogin/start">
				                    			<input type="button" value="Cancelar"  class="btn btn-default btn-lg">
				                    		</a>
						                    	
						                </div>
						                     
						            </div>
						                        <!-- ************* BOTONES ***************-->
						        </div>
						        <!-- ************************************************ -->
						     </div>
						                          
						    
						</div>          
					</form>
				
			</div>
		</div>
		 <script src="<?php echo base_url()?>static/js/notify.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo base_url()?>static/js/bootstrap.min.js"></script>
	</body>
</html>