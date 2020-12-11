 <!--=====================================
  =       MODAL AGREGAR PACIENTES         =
  ======================================-->

  <!-- The Modal -->
<div id="modalAgregarPacientes" class="modal fade" role="dialog">

  <!-- MODAL DIALOG -->
  <div class="modal-dialog">

    <!-- CONTENIDO MODAL -->
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

          <!-- Modal Header -->
          <div class="modal-header" style="background:#3c8dbc; color:#fff;">
            
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Pacientes</h4>
            
          </div>



   <!-- Modal body -->
    <div class="modal-body">
      <div class="box-doby">

              <table class="col-sm-12">
                <tr>
                  <td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">DEL ASEGURADO / USUARIO</td>
                </tr>
              </table>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">N° DE DNI</td>
                </tr>
              </table>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">FECHA DE NACIMIENTO</td>
                </tr>
              </table>

              <!-- ENTRADA DEL DOCUMENTO -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoDoc" placeholder="Ingresar Nº DNI" required>
                </div>
              </div>

              <!-- ENTRADA DE FECHA DE NACIMIENTO -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="date" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar Fecha de Nacimiento" >
                </div>
              </div>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">APELLIDO PATERNO</td>
                </tr>
              </table>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">APELLIDO MATERNO</td>
                </tr>
              </table>

              <!-- ENTRADA DEL APELLIDO PATERNO -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoApellido1" placeholder="Ingresar Apellido Paterno" required>
                </div>
              </div>

              <!-- ENTRADA DEL APELLIDO MATERNO -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoApellido2" placeholder="Ingresar Apellido Materno" required>
                </div>
              </div>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">PRIMER NOMBRE</td>
                </tr>
              </table>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">SEGUNDO NOMBRE</td>
                </tr>
              </table>

              <!-- ENTRADA DEL NOMBRE 1 -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombre1" placeholder="Ingresar 1er nombre" required>
                </div>
              </div>

              <!-- ENTRADA DEL NOMBRE 2 -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombre2" placeholder="Ingresar 2do nombre" >
                </div>
              </div>

              <table class="col-sm-12 col-xs-12">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">OTROS NOMBRES</td>
                </tr>
              </table>

              <!-- ENTRADA DEL NOMBRE 3 -->
              <div class="form-group col-sm-12 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombre3" placeholder="Ingresar 3er nombre" >
                </div>
              </div>

              <table class="col-sm-12 col-xs-12">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">CELULAR</td>
                </tr>
              </table>

              <!-- ENTRADA DEL TELEFONO -->
              <div class="form-group col-sm-12 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar #Telefono">
                </div>
              </div>

              


     </div> 
  </div>



          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Guardar Pasiente</button>
          </div>

       </form>

       
          <?php

          $crearPacientes = new ControladorPacientes();
          $crearPacientes -> ctrCrearPacientesCPANEL();

           ?>

    
    </div>
    <!-- /CONTENIDO MODAL -->
  </div>
  <!-- /MODAL DIALOG -->
<!-- fin modal agregar pacientes -->
</div>


