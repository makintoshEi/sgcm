<script src="<?php echo base_url()?>static/js/user/cita.js"></script>
    
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
                        CREAR CITA</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      
                      <div class="panel-body">

                        <div class="row">
                        <div id="divFrmClient" class="col-md-8 col-md-offset-2" style="border: 1px solid #ccc; padding:10px 35px 40px 35px;background-color:#FFF;"> 
                            <form id="frmEsp">
                                <fieldset class="scheduler-border">
                                  <legend class="scheduler-border">Nueva Cita</legend>         
                                  
                                  <div class="form-group">
                                    <label for="txtName">Especialidad:</label>
                                    <select class="form-control" id="cmbEsp" name="cmbEsp" style="font-size: 12px"></select>

                                  </div>
                                </fieldset>  
                                <div class="row">
                                  <div class="col-md-12">
                                      <table data-order='[[ 0, "asc" ]]' class="table table-hovered table-bordered" cellspacing="0" width="100%" id="tbCita">
                                          <thead>
                                              <tr>
                                                  <th class="text-center">Cedula</th>
                                                  <th class="text-center">Medico</th>
                                                   <th class="text-center">Acción</th>
                                              </tr>
                                          </thead>
                                          <tbody id="tblBody" class="text-justify">
                                              
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
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

    <!-- ********************* MODAL **************************************** -->
        <div class="row">
            <div class="modal fade"  id="modalEspecialidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="width:400px">
                    <div class="modal-content panel panel-primary">
                        <div class="modal-header panel panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel" style="text-align: center;"></h4>
                        </div>                   
                        <div class="modal-body" >
                            <input type="hidden" id="txtId">
                            <div id="alert" style="display:none;" class="alert alert-danger"></div>                        
                            <label >Descripcion:</label>                        
                            <input type="text" class="form-control" placeholder="Especialidad" name="mesp_des" id="mesp_des">

                         
                        </div>           
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <a href="" type="button" class="btn btn-primary" id="btnModalGuardar">Guardar</a>
                        </div>                
                    </div>
                 </div>
            </div>    
        </div> 
    <!-- ********************* END MODAL ***************************************************** -->    
  </body>
</html>