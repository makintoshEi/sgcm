    <title>Cliente</title>
    
    <script src="<?php echo base_url()?>static/js/cliente.js"></script>
    <!-- Bootstrap -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
        <div class="well panel panel-default" style="margin-top: 1%">
        <div class="panel-group" id="accordion" role="tablist" aria-multisectable="true">
            
            <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    CREAR CLIENTE
                    </a>
                    </h4>
                </div>
                <!--************************************* COLLAPSED ONEEEE ***************************************-->
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <form id="frmMul" role="form" class="form-horizontal">
    
                    <div class="row">
                       
                            <div class="panel panel-primary">
                                
                                    <div class="panel-body">
                                    <!--**************************************************** -->
                                        <div class="container">
                                           
                                            <div class="form-group">
                                                
                                                <label class="col-lg-2 control-label">Cedula</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" type="text" placeholder="Cedula" name="cedula" id="cedula">
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                                
                                                <label class="col-lg-2 control-label">Nombres</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" type="text" placeholder="Nombres" name="nombre" id="nombre">
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                               
                                                <label class="col-lg-2 control-label">Apellidos</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" type="text" placeholder="Apellidos" name="apellido" id="apellido">
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                
                                                <label class="col-lg-2 control-label">Direccion</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" type="text" placeholder="Direccion" name="direccion" id="direccion">
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                
                                                <label class="col-lg-2 control-label">Telefono</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" type="text" placeholder="Telefono" name="telefono" id="telefono">
                                                </div>
                                               
                                            </div>
                                            <br>
                                            <div class="row">
                                                
                                                <label class="col-lg-2 control-label">Email</label>
                                                <div class="col-lg-5">
                                                    <input class="form-control" type="email" placeholder="Email" name="email" id="email">
                                                </div>
                                                
                                            </div>
                                            <br>
                                            
                                            <!-- ************* BOTONES ***************-->
                                            <div class="form-group">
                                                
                                                <div class="col-lg-offset-4 col-lg-12">
                                                    <button class="btn btn-primary btn-lg">Guardar</button>
                                                </div> 
                                                <!--  
                                                <div class="col-lg-offset-2 col-lg-4">
                                                    <button class="btn btn-default" id="btnLoad">Cargar</button>
                                                </div>-->   
                                                
                                            </div>
                                            <!-- ************* BOTONES ***************-->
                   
                                        </div>

                                    <!-- ************************************************ -->

                                    </div>
                                              
                        </div>
                    </div>          
                    </form>
                </div>
                </div>
                <!--************************************* END COLLAPSED ONEEEE ***************************************-->
           
            <!-- END PRIMER ACCORDION **************************-->

             <!-- *********************LISTAR CLIENTES ******************************* -->
    
      <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" id="ltClient" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              LISTAR CLIENTES
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            
            <div class="row">
                <div class="col-md-12">
                    <table data-order='[[ 0, "asc" ]]' class="table table-hovered table-bordered" cellspacing="0" width="100%" id="tbClients">
                        <thead>
                            <tr>
                                <th class="text-center"> Cedula </th>
                                <th class="text-center"> Nombre </th>
                                <th class="text-center"> Apellido </th>
                                <th class="text-center"> Direccion</th>
                                <th class="text-center"> Telefono </th>
                                <th class="text-center"> Email </th>
                                <th class="text-center" colspan="2">Acción</th>
                            </tr>
                        </thead>
                        <tbody id="tblBody">
                            
                        </tbody>
                    </table>
                </div>
            </div>

          </div>
        </div>
      </div>
    
      <!-- END LISTAR CLIENTES************** -->
        </div>
    </div>
        </div>
    </div>
    
    

       
    <!-- ********************* MODAL **************************************** -->
        <div class="row">
            <div class="modal fade"  id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="width:500px">
                    <div class="modal-content panel panel-primary">
                        <div class="modal-header panel panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel" style="text-align: center;"></h4>
                        </div>                   
                        <div class="modal-body" >
                            <input type="hidden" id="txtId">
                            <div id="alert" style="display:none;" class="alert alert-danger"></div>                        
                            <label >Nombre:</label>                        
                            <input type="text" class="form-control" placeholder="Nombre" name="nom" id="nom">

                            <label >Apellido:</label>                        
                            <input type="text" class="form-control" placeholder="Apellido" name="ape" id="ape">

                            <label >Direccion:</label>                        
                            <input type="text" class="form-control" placeholder="Direccion" name="dir" id="dir">

                            <label >Telefono:</label>                        
                            <input type="text" class="form-control" placeholder="Telefono" name="tel" id="tel">

                            <label >Email:</label>                        
                            <input type="text" class="form-control" placeholder="Email" name="eml" id="eml">

                        </div>           
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <a href="" type="button" class="btn btn-primary" id="btnModalGuardar">Guardar</a>
                        </div>                
                    </div>
                 </div>
            </div>    
        </div> 
    
    <!-- Notify -->
    
    
    <script src="<?php echo base_url()?>static/js/notify.js"></script>
   
    
  </body>
</html>