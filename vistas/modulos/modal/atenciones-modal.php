 <!--=====================================
  =       MODAL AGREGAR ATENCIONES        =
  ======================================-->

  <!-- The Modal -->
<div id="modalAgregarAtenciones" class="modal fade" role="dialog">

  <!-- MODAL DIALOG -->
  <div class="modal-dialog">

    <!-- CONTENIDO MODAL -->
    <div class="modal-content modal-lg">

      <form role="form" method="post" enctype="multipart/form-data">

          <!-- Modal Header -->
          <div class="modal-header" style="background:#3c8dbc; color:#fff;">
            
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Atención</h4>
            
          </div>



   <!-- Modal body -->
    <div class="modal-body">
      <div class="box-doby">

              <table class="col-sm-12">
                <tr>
                  <td style="border: 2px solid #fff; width:640px; text-align:center; background-color:#5898CC; color:#fff;">DEL REGISTRO</td>
                </tr>
              </table>


              <!-- ENTRADA CODIGO DE LA ATENCIÓN -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <?php

                  $item = null;
                  $valor = null;

                  $atencion = ControladorAtenciones::ctrMostrarAtenciones($item, $valor);

                  if (!$atencion) {
                    
                     echo '<input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="1" readonly>';
                     
                   }else{

                    foreach ($atencion as $key => $value) {
                      # code...
                    }

                    $codigo = $value["codigo_atencion"] +1;

                    echo '<input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="'.$codigo.'" readonly>';
                   }

                   ?>
                  
                </div>
              </div>

              <!-- ENTRADA DEL USUARIO QUE REGISTRA LA ATENCIÓN -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" id="idUser" name="idUser" value="<?php echo $_SESSION["perfil"]; ?>" readonly>
                  <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id_usuario"]; ?>">
                </div>
              </div>

              <div style="border-style: solid;">
                <table class="col-sm-12">
                  <tr>
                    <td style="border: 2px solid #fff; width:640px; text-align:center; background-color:#5898CC; color:#fff;">DE LAS ATENCIONES</td>
                  </tr>
                </table>

                <table class="col-sm-6">
                  <tr>
                    <td style="border: 2px solid #fff; width:50px; text-align:center;  background-color:#5898CC; color:#fff;">FECHA DE ATENCIÒN</td>
                  </tr>
                </table>

                <table class="col-sm-6">
                  <tr>
                    <td style="border: 2px solid #fff; width:50px; text-align:center;  background-color:#5898CC; color:#fff;">SERVICIO</td>
                  </tr>
                </table>

                <!-- ENTRADA DE FECHA DE ATENCION -->
                <div class="form-group col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar fa-2x" style="color:#FF3A0F;" aria-hidden="true"></i></span>
                    <input type="date" class="form-control input-lg" name="nuevaFechaAtencion" >
                  </div>
                </div>

                <!-- ENTRADA DE SERVICIO -->
                <div class="form-group col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-medkit fa-2x" style="color:#FF3A0F; aria-hidden="true"></i></span>
                    <select class="form-control input-lg" name="nuevoServicio" id="buscarServicio" style="width: 100%">
                      <option value="">Seleccionar Servicio</option>
                      <option value="Medicina Interna">MEDICINA INTERNA</option>
                      <option value="Medicina General">MEDICINA GENERAL</option>
                      <option value="Gastroenterologia">GASTROENTEROLOGIA</option>
                      <option value="Pediatria">PEDIATRIA GENERAL</option>
                      <option value="Ginecologia">GINECOLOGIA</option>
                      <option value="Ecografia">ECOGRAFIA</option>
                      <option value="Rayos X">RAYOS X</option>
                      <option value="Laboratorio">LABORATORIO</option>
                      <option value="Cirugia General">CIRUGIA GENERAL</option>
                      <option value="Odontologia General">ODONTOLOGIA GENERAL</option>
                      <option value="Psicologia">PSICOLOGIA</option>
                      <option value="Cred">CRECIMIENTO Y DESARROLLO (CRED)</option>
                      <option value="Obstetricia">OBSTETRICIA (MATERNO, PLANIFICACIÓN FAMILIAR, ETS-VIH)</option>
                    </select>
                  </div>
                </div>
                
              </div>





              <table class="col-sm-12" hidden>
                <tr>
                  <td style="border: 2px solid #fff; width:640px; text-align:center; background-color:#5898CC; fa-2x">DEL SERVICIO</td>
                </tr>
              </table>

               <!-- ENTRADA DE UPS -->
               <div class="form-group col-sm-6" hidden>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-medkit fa-2x" aria-hidden="true"></i></span>
                  <select class="form-control input-lg" name="nuevaUps" id="buscarUps" style="width: 100%">
                    <option value="">Seleccionar UPS</option>
                    <option value="Consulta Externa">CONSULTA EXTERNA</option>
                    <option value="Hospitalizacion">HOSPITALIZACION</option>
                    <option value="Emergencia">EMERGENCIA</option>
                    <option value="Medicina Preventiva">MEDICINA PREVENTIVA</option>
                  </select>
                </div>
              </div>

              <!-- ENTRADA DE SERVICIO -->
              <!-- <div class="form-group col-sm-4">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="nuevoServicio" id="buscarServicio" style="width: 100%">
                    <option value="">Seleccionar Servicio</option>
                    <option value="Medicina Interna">MEDICINA INTERNA</option>
                    <option value="Medicina General">MEDICINA GENERAL</option>
                    <option value="Gastroenterologia">GASTROENTEROLOGIA</option>
                    <option value="Pediatria">PEDIATRIA GENERAL</option>
                    <option value="Ginecologia">GINECOLOGIA</option>
                    <option value="Ecografia">ECOGRAFIA</option>
                    <option value="Rayos X">RAYOS X</option>
                    <option value="Laboratorio">LABORATORIO</option>
                    <option value="Cirugia General">CIRUGIA GENERAL</option>
                    <option value="Odontologia General">ODONTOLOGIA GENERAL</option>
                    <option value="Psicologia">PSICOLOGIA</option>
                    <option value="Cred">CRECIMIENTO Y DESARROLLO (CRED)</option>
                    <option value="Obstetricia">OBSTETRICIA (MATERNO, PLANIFICACIÓN FAMILIAR, ETS-VIH)</option>
                  </select>
                </div>
              </div> -->

              <!-- ENTRADA DE ESPECIALIDAD -->
              <div class="form-group col-sm-6" hidden>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-medkit fa-2x" style="color:#FF3A0F;" aria-hidden="true"></i></span>
                  <select class="form-control input-lg" name="nuevaEspecialidad" id="buscarEspecialidad" style="width: 100%">
                    <option value="">Seleccionar Especialidad</option>
                    <option value="Medicina Interna">MEDICINA INTERNA</option>
                    <option value="Medicina General">MEDICINA GENERAL</option>
                    <option value="Gastroenterologia">GASTROENTEROLOGIA</option>
                    <option value="Pediatria">PEDIATRIA GENERAL</option>
                    <option value="Ginecologia">GINECOLOGIA</option>
                    <option value="Cirugia General">CIRUGIA GENERAL</option>
                    <option value="Odontologia General">ODONTOLOGIA GENERAL</option>
                    <option value="Psicologia">PSICOLOGIA</option>
                    <option value="Cred">CRECIMIENTO Y DESARROLLO (CRED)</option>
                    <option value="Obstetricia">OBSTETRICIA (MATERNO, PLANIFICACIÓN FAMILIAR, ETS-VIH)</option>
                  </select>
                </div>
              </div>

              
              
              <table class="col-sm-12">
                <tr>
                  <td style="border: 2px solid #fff; width:640px; text-align:center; background-color:#5898CC; color:#fff;">DEL ASEGURADO / USUARIO</td>
                </tr>
              </table>

              <table class="col-sm-3 col-xs-3">
                <tr>
                  <td style="border: 2px solid #fff; width:50px; text-align:center;  background-color:#5898CC; color:#fff;">N° DE DNI</td>
                </tr>
              </table>

              <table class="col-sm-9 col-xs-9">
                <tr>
                  <td style="border: 2px solid #fff; width:50px; text-align:center;  background-color:#5898CC; color:#fff;">NOMBRE COMPLETO</td>
                </tr>
              </table>

              <!-- ENTRADA DEL PACIENTE -->
              <div class="form-group col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa-2x" style="color:#FF3A0F;"></i></span>
                  <select class="form-control input-lg" name="nuevoPaciente" id="buscarPaciente2" style="width: 100%">
                    <option value="">Seleccionar paciente</option>
                    <?php

                    $item = null;
                    $valor = null;

                    $pacientes = ControladorPacientes::ctrMostrarPacientes($item, $valor);

                    foreach ($pacientes as $key => $value) {
                       echo '<option value="'.$value["id_paciente"].'">'."&nbsp; DNI: &nbsp;&nbsp;[ ".$value["documento"]." ] &nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp; NOMBRE: [ ".$value["apellido_pat"]." ".$value["apellido_mat"]." ".$value["nombre1"]." ".$value["nombre2"]." ".$value["nombre3"]."]".'</option>';
                     } 


                     ?>
                  </select>
                </div>
              </div>

        

              <table class="col-sm-12">
                <tr>
                  <td style="border: 2px solid #fff; width:640px; text-align:center; background-color:#5898CC; color:#fff;">NOMBRE DEL RESPONSABLE DE LA ATENCIÓN</td>
                </tr>
              </table>

              <table class="col-sm-3 col-xs-3">
                <tr>
                  <td style="border: 2px solid #fff; width:50px; text-align:center;  background-color:#5898CC; color:#fff;">PROFESIÓN</td>
                </tr>
              </table>

              <table class="col-sm-9 col-xs-9">
                <tr>
                <td style="border: 2px solid #fff; width:50px; text-align:center;  background-color:#5898CC; color:#fff;">NOMBRE COMPLETO</td>
                </tr>
              </table>

              
              

              <!-- ENTRADA DEL PERSONAL DE SALUD -->
              <div class="form-group col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-md fa-2x" style="color:#FF3A0F;" aria-hidden="true"></i></span>
                  <select class="form-control input-lg" name="nuevaPersonalSalud" id="buscarPersonalSalud" style="width: 100%">
                    <option value="">Seleccionar Personal de Salud</option>
                    <?php

                    $item = null;
                    $valor = null;

                    $personalSalud = ControladorPersonalSalud::ctrMostrarPersonalSalud($item, $valor);

                    foreach ($personalSalud as $key => $value) {
                       echo '<option value="'.$value["id_personal_salud"].'">'."&nbsp; PROFESIÓN: [".$value["profesion"]."] &nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; NOMBRE: [ ".$value["apellido"]." ".$value["nombre"]."]".'</option>';
                     } 


                     ?>
                  </select>
                </div>
              </div>

              <table class="col-sm-12 col-xs-12">
                <tr>
                <td style="border: 2px solid #fff; width:50px; text-align:center;  background-color:#5898CC; color:#fff;">SU DIAGNOSTICO EN TEXTO</td>
                </tr>
              </table>

              <!-- ENTRADA DEL DIAGNOSTICO -->
              <div class="form-group col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-file-text fa-2x" style="color:#FF3A0F;" aria-hidden="true"></i></span>

                  <textarea class="form-control" id="nuevoDiagnostico" name="nuevoDiagnostico" rows="3" placeholder="Describe diagnostico (CIEX), ..."></textarea>
                        
                </div>
              </div>


              <table class="col-sm-12 col-xs-12">
                <tr>
                <td style="border: 2px solid #fff; width:50px; text-align:center;  background-color:#518CBD; color:#fff;">SU DIAGNOSTICO EN IMAGEN</td>
                </tr>
              </table>

              <!-- ENTRADA PARA SUBIR FOTO 1 -->    
              <div class="form-group col-sm-3 col-xl-3">
                <div class="panel"></div>
                <input type="file" class="fotoDiagnostico" name="fotoDiagnostico">
                <p class="help-block">Peso máximo de la foto 5 MB</p>
                <img src="vistas/img/atenciones/doc/doc3.png" class="img-thumbnail previsualizar" width="100px">
              </div>

              <!-- ENTRADA PARA SUBIR FOTO 2 -->    
              <div class="form-group col-sm-3 col-xl-3">
                <div class="panel"></div>
                <input type="file" class="fotoDiagnostico2" name="fotoDiagnostico2">
                <p class="help-block">Peso máximo de la foto 5 MB</p>
                <img src="vistas/img/atenciones/doc/doc3.png" class="img-thumbnail previsualizar2" width="100px">
              </div>

              <!-- ENTRADA PARA SUBIR FOTO 3 -->    
              <div class="form-group col-sm-3 col-xl-3">
                <div class="panel"></div>
                <input type="file" class="fotoDiagnostico3" name="fotoDiagnostico3">
                <p class="help-block">Peso máximo de la foto 5 MB</p>
                <img src="vistas/img/atenciones/doc/doc3.png" class="img-thumbnail previsualizar3" width="100px">
              </div>

              <!-- ENTRADA PARA SUBIR FOTO 4 -->    
              <div class="form-group col-sm-3 col-xl-3">
                <div class="panel"></div>
                <input type="file" class="fotoDiagnostico4" name="fotoDiagnostico4">
                <p class="help-block">Peso máximo de la foto 5 MB</p>
                <img src="vistas/img/atenciones/doc/doc3.png" class="img-thumbnail previsualizar4" width="100px">
              </div>
  

     </div> 
  </div>



          <!-- Modal footer -->
          <div class="modal-footer">
            <div class="form-group col-sm-12">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
              <button type="submit" class="btn btn-primary">Guardar Atención</button>
            </div>
          </div>

       </form>


       <?php

          $atenciones2 = new ControladorAtenciones();
          $atenciones2 -> ctrCrearAtencionCPANEL();

      ?>


    </div>
    <!-- /CONTENIDO MODAL -->
  </div>
  <!-- /MODAL DIALOG -->
<!-- fin modal agregar pacientes -->
</div>