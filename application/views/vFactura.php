<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--PRUEBA**************** The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Factura</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/static/css/jquery-ui.min.css" rel="stylesheet" type="text/css">        
  </head>
  <body>

    <!-- CREAR FACTURA -->
    <div class="row">
    <div class="col-lg-offset-3 col-lg-8">
    <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" id="ltNew" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        CREAR FACTURA
      </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      
      <div class="row">
        <div id="divFrmInvoice" class="col-xs-12 col-sm-10 col-sm-offset-1" style="border: 1px solid #ccc; padding:10px 35px 40px 35px;background-color:#FFF;"> 
          <form id="frmNewInvoice">
            <fieldset class="scheduler-border">
              <legend class="scheduler-border">Datos del Cliente</legend>
              
              <div class="form-group col-xs-12">
              <label for="txtCedula">C.I./R.U.C.:</label>
              <input type="text" required="true" class="form-control" id="txtCedula" name="txtCedula" placeholder="Ingrese C.I./R.U.C." maxlength="13"/>
              </div>

              <div class="form-group col-sm-6">
              <label for="txtNombre">Nombre:</label>
              <input type="text" required="true" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese Nombre"/>
              </div>

              <div class="form-group col-sm-6">
              <label for="txtApellido">Apellido:</label>
              <input type="text" required="true" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese Apellido"/>
              </div>

              <div class="form-group col-xs-12">
              <label for="txtEmail">E-mail:</label>
              <input type="email"  class="form-control" id="txtEmail" name="txtEmail" placeholder="Ingrese Email"/>
              </div>

              <div class="form-group col-xs-12">
              <label for="txtDireccion">Dirección:</label>
              <input type="text" required="true" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="Ingrese Dirección"/>
              </div>

              <div class="form-group col-xs-12">
              <label for="txtTelefono">Teléfono:</label>
              <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingrese Telefono"/>
              </div>
            </fieldset>
            <fieldset class="scheduler-border">
              <legend class="scheduler-border">Datos de Factura</legend>
              
              
              <div class="form-group col-xs-12 col-sm-4">
              <label for="txtNumero"></label>
              <input type="number" min="1" max="999999999" step="1" class="form-control" id="txtNumero" name="txtNumero" placeholder="N° de factura"/>
              </div>
              <div class="form-group col-xs-12 col-sm-6">
              <label for="txtFecha">Fecha:</label>
              <input type="date" required="true" class="form-control" id="txtFecha" name="txtFecha"/>
              </div>
              <div class="form-group col-xs-12">
              <label for="txtProductos">Detalles:</label>
              <div id="divProduct">
                <input type="text" class="form-control" id="txtProductos" name="txtProductos" placeholder="Ingrese Productos"/>
              </div>
                <br>
              <div style="overflow-x:hidden; overflow-y:auto;" id="divTbDetails">
                <table class="table-hovered table-bordered" cellspacing="0" width="100%" id="details">
                  
                  <thead>
                    <tr>
                      <th class="text-center" width="40%">Producto</th>
                      <th class="text-center">Precio</th>
                      <th class="text-center">Cant.</th>
                      <th class="text-center">Total</th>
                      <th class="text-center">Acción</th>
                    </tr>
                  </thead>
                  <tbody id="tbodyDetails">
                    
                  </tbody>
                </table>
              </div>
              </div>
              
              <div class="form-group col-xs-12">
              <label for="txtSubtotal">Subtotal:</label>
              <input type="number" readonly="true" class="form-control" id="txtSubtotal" name="txtSubtotal" value="0"/>
              </div>

              <div class="form-group col-xs-12">
              <label for="txtDesc">Descuento:</label><br/>
                <input type="number" readonly="true" class="form-control" id="txtCantDesc" name="txtCantDesc" value="0" style="width:65%; display:inline;"/>
                <input type="number" step="0.1" min="0" max="100" class="form-control" id="txtDesc" name="txtDesc" value="0" style="width:30%; display:inline;" onchange="$.calculateDesc('')"/>
              </div>

              <div class="form-group col-xs-12">
              <label for="chkIva">I.V.A:</label>
              <input type="checkbox" class="form-control" id="chkIva" name="chkIva" checked="true" onchange="$.calculateIva('')" style="width:15px; height:15px; display:inline;"/>
              <br/>
              <input type="number" readonly="true" class="form-control" id="txtIva" name="txtIva" value="0"/>
              </div>
             
              <div class="form-group col-xs-12">
              <label for="txtTotal">Total:</label>
              <input type="number" readonly="true" class="form-control" id="txtTotal" name="txtTotal" value="0"/>
              </div>
            </fieldset>
            <div class="row">
              <div align="center" id="actionButtonsNew">
              <button type="reset" onclick="$.vaciarDetalles('')" class="button button-3d button-rounded">Borrar</button>
              <button type="submit" class="button button-3d-primary button-rounded">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      </div>
    </div>
    </div>
    </div>
    </div>

    <!--END CREAR FACTURA-->

     <!-- LISTAR FACTURA -->
     <div class="row">       
     <div class="col-lg-offset-3 col-lg-8">
    <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
      <a class="collapsed" id="ltFood" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        LISTAR FACTURAS
      </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      
      <div class="row">
        <div class="col-sm-12">
          <table data-order='[[ 0, "asc" ],[ 0, "asc" ],[ 0, "asc" ],[ 0, "asc" ]]' class="table table-hovered table-bordered" cellspacing="0" width="100%" id="tbFacturas">
            <thead>
              <tr>
                <th class="text-center">Fecha</th>
                <th class="text-center">N°</th>
                <th class="text-center">Cliente</th>
                <th class="text-center">Total</th>
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
    </div>
    </div>
    <!-- END LISTAR FACTURAS -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url()?>static/js/jquery_2.1.4.js"></script>
    <script src="<?php echo base_url()?>static/js/factura.js"></script>
    <script src="<?php echo base_url()?>static/js/notify.js"></script>
    <script src="<?php echo base_url()?>static/js/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>static/js/bootstrap.min.js"></script>
  </body>
</html>