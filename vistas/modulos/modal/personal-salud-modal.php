<!--=====================================
 =     REGISTRO PERSONAL DE SALUD       =
 ======================================-->
 
  <!-- The Modal -->
<div id="modalAgregarPersonalSalud" class="modal fade" role="dialog">

  <!-- MODAL DIALOG -->
  <div class="modal-dialog">

    <!-- CONTENIDO MODAL -->
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

          <!-- Modal Header -->
          <div class="modal-header" style="background:#3c8dbc; color:#fff;">
            
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Personal de Salud</h4>
            
          </div>



          <!-- Modal body -->
          <div class="modal-body">
            <div class="box-doby">

            <table class="col-sm-12">
                <tr>
                  <td style="border: 2px solid #fff; width:640px; text-align:center; background-color:#5898CC; color:#fff;">PERSONAL DE SALUD</td>
                </tr>
              </table>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 2px solid #fff; width:50px; text-align:center; background-color:#5898CC; color:#fff;">N° DE DNI</td>
                </tr>
              </table>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 2px solid #fff; width:50px; text-align:center; background-color:#5898CC; color:#fff;">PROFESIÓN</td>
                </tr>
              </table>

              <!-- ENTRADA DEL DNI -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-address-card fa-2x" style="color:#FF3A0F;"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoDocumento" placeholder="Ingresar #DNI" required>
                </div>
              </div>

              <!-- SELECCIONAR PROFESION -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-id-card fa-2x" style="color:#FF3A0F;"></i></span>
                  <select class="form-control input-lg" name="nuevaProfesion" id="buscarProfesion" style="width: 100%">
                    <option value="">Seleccionar Profesión</option>
                    <option value="Doctor">DOCTOR</option>
                    <option value="Enfermera">LIC. ENFERMERIA</option>
                    <option value="Obstetra">OBTETRICIA</option>
                    <option value="Psicologo">PSICOLOGO</option>
                    <option value="Biologo">BIOLOGO</option>
                    <option value="Quimico Farmaceutico">QUIMICO FARMACEUTICO</option>
                  </select>
                </div>
              </div>

              <table class="col-sm-12 col-xs-12">
                <tr>
                  <td style="border: 2px solid #fff; width:50px; text-align:center; background-color:#5898CC; color:#fff;">NOMBRES</td>
                </tr>
              </table>

              <!-- ENTRADA DEL NOMBRE -->
              <div class="form-group col-sm-12 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-circle fa-2x" style="color:#FF3A0F;"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombrePS" placeholder="Ingresar nombre" required>
                </div>
              </div>

              <table class="col-sm-12 col-xs-12">
                <tr>
                  <td style="border: 2px solid #fff; width:50px; text-align:center; background-color:#5898CC; color:#fff;">APELLIDOS</td>
                </tr>
              </table>

              <!-- ENTRADA DEL APELLIDO -->
              <div class="form-group col-sm-12 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-circle fa-2x" style="color:#FF3A0F;"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoApellidoPS" placeholder="Ingresar apellido" required>
                </div>
              </div>

              <table class="col-sm-12 col-xs-12">
                <tr>
                  <td style="border: 2px solid #fff; width:50px; text-align:center; background-color:#5898CC; color:#fff;">ESPECIALIDAD</td>
                </tr>
              </table>

              <!-- ENTRADA DE ESPECIALIDAD -->
              <div class="form-group col-sm-12 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-star fa-2x" style="color:#FF3A0F;"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevaEspecialidad" placeholder="Ingrese Especialidad">
                </div>
              </div>


            </div> 
          </div>



          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Guardar Personal de Salud</button>
          </div>

       </form>

       
          <?php

          $crearPersonalSalud = new ControladorPersonalSalud();
          $crearPersonalSalud -> ctrCrearPersonalSaludCPANEL();

           ?>

    
    </div>
    <!-- /CONTENIDO MODAL -->
  </div>
  <!-- /MODAL DIALOG -->
<!-- /MODAL REGISTRO PERSONAL DE SALUD -->
</div>

