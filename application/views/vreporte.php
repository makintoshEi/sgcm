<link href="<?php echo base_url()?>/static/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/dataTables.bootstrap.css">
      
      
      <script src="<?php echo base_url()?>static/js/jquery-1.11.3.min.js"></script>
      <script src="<?php echo base_url()?>static/js/header.js"></script>
      <script src="<?php echo base_url()?>static/js/alls.js"></script>
      <script src="<?php echo base_url()?>static/js/user/registro_usuario.js"></script>
      <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>static/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>static/js/dataTables.bootstrap.js"></script>
      <script src="<?php echo base_url()?>static/js/notify.js"></script>

 <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid">
              <div class="well panel panel-default" style="margin-top: 1%">
                <!-- ************** ACORDIONES *****************-->
                <div class="panel-group" id="accordion">
  
                  <div class="panel panel-primary">
                    <div class="panel-heading panel-heading-custom">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        REGISTRO DE USUARIO</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      
                      <div class="panel-body">
                        <div class="row">
                            <div id="divFrmUsuario" class="col-md-6 col-md-offset-3" style="border: 1px solid #ccc; padding:10px 35px 40px 35px;background-color:#FFF;">    
                                <form id="frmUsu_save">
                                    <!--*************************FORMULARIO*************************** -->
                                    <fieldset class="scheduler-border">
                                      <legend class="scheduler-border">Registrar Usuario</legend>         
                                      <div class="form-group">
                                        <label for="txtName">C.I:</label>
                                        <input type="text" required="true" class="form-control" id="txtcedula" name="txtcedula" placeholder="Ingrese C.I." maxlength="10"/>
                                      </div>
                                      <div class="form-group">
                                        <label for="txtName">Nombre:</label>
                                        <input type="text" required="true" class="form-control" id="txtnombre" name="txtnombre" placeholder="Ingrese Nombre"/>
                                      </div>
                                      <div class="form-group">
                                        <label for="txtName">Apellido:</label>
                                        <input type="text" required="true" class="form-control" id="txtapellido" name="txtapellido" placeholder="Ingrese Apellido"/>
                                      </div>
                                      <div class="form-group">
                                        <label for="txtName">Dirección:</label>
                                        <input type="text" class="form-control" id="txtdireccion" name="txtdireccion" placeholder="Ingrese Dirección"/>
                                      </div>

                                      <div class="form-group">
                                        <label for="txtName">E-mail:</label>
                                        <input type="text"  required="true" class="form-control" id="txtemail" name="txtemail" placeholder="Ingrese Email"/>
                                      </div>

                                      <div class="form-group">
                                        <label for="txtName">Password:</label>
                                        <input type="password"  class="form-control" id="txtpassword" name="txtpassword" placeholder=""/>
                                      </div>
                                      
                                    </fieldset>                        
                                    <!-- ************* BOTONES ***************-->
                                    <div class="row">
                                      <div align="center">
                                        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                                        <a href="<?= base_url()?>clogin/start">
                                          <input type="button" value="Cancelar"  class="btn btn-default btn-lg">
                                        </a>
                                      </div>
                                  </div>
                                    <!-- ************* BOTONES ***************-->
                                </form>
                            </div>
                        </div>  
                      </div>

                    </div>
                  </div>
  
                </div>
              <!-- ************************************* ACORDIONES ****************************-->
            </div>
            </div><!-- /#container-fluid -->
        </div>
  <!-- /#page-content-wrapper -->
</body>
</html>