@section('content')
<h3>
  <i class="icon-user-follow"> </i>{{$client->name or ' Crear Cliente'}}
</h3>
<div class="row">
  <div class="col-sm-12">
    <div class="card-box">
      <form action="#" id="wizard-vertical">
            <h3>Paso 1</h3>
            <section>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">Nombre y Apellidos </label>
                    <div class="col-lg-6">
                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                    </div>
                </div>
                <div class="form-group clearfix">
                   <label class="col-lg-2 control-label " for="nombre">Cumpleaños </label>
                   <div class="col-sm-4">
                      <div class="input-group">
                        <input type="text" style="color:#fc2b6a;" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                       </div><!-- input-group -->
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">Edad </label>
                    <div class="col-sm-2">
                        <input type="text" class="required form-control autonumber" style="color:#fc2b6a;" data-v-min="1" data-v-max="150" placeholder="">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">Estado Civil </label>
                    <div class="col-lg-6">
                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">DPI </label>
                    <div class="col-lg-6">
                        <input class="required form-control" data-mask="9999 99999 9999" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">Direccion </label>
                    <div class="col-lg-10">
                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">Correo </label>
                    <div class="col-lg-6">
                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                    </div>
                </div>
                
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label ">Referido </label>
                    <select class="form-control select2">
                      <option>Select</option>
                      <option value="AK">Estuardo Chuy</option>
                      <option value="HI">Francisco Flores</option>
                    </select>
                      
                </div>
              </section>
              
              <h3>Paso  2</h3>
              <section>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Diabetes
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Hipertension Arterial
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Problemas de Tiroides
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Desorden Hormonales
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Epilepsia
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Problemas Cardiacos/Marcapasos
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Cancer
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Asma o Alergia
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Queloides
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          VIH
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Enfermedad Renal
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Higado Graso
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Problemas Neurologicos
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Depresion
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Enfermedades Neuromusculares
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Eclerodermia
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Psoriasis
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Herpes
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Problemas Respiratorios
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Otros
                      </label>
                    </div>
                  </div>
                </div>
            </section>
            
              <h3>Paso 3</h3>
              <section>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Si
                      </label>
                      <div class="col-lg-5">
                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          No
                      </label>
                    </div>
                  </div>
                </div>
              </section>
            <h3>Paso 4</h3>
              <section>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Diabetes
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Hipertension Arterial
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Problemas de Tiroides
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Desorden Hormonales
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Enfermedad Renal
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Higado Graso
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Problemas Neurologicos
                      </label>
                    </div>
                  </div>
                </div>
            </section>

            <h3>Paso 5</h3>
              <section>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Diabetes
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Hipertension Arterial
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Problemas de Tiroides
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Desorden Hormonales
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Desorden Hormonales
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Enfermedad Renal
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Higado Graso
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Problemas Neurologicos
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Problemas Neurologicos
                      </label>
                    </div>
                  </div>
                </div>
            </section>
            
            <h3>Paso 6</h3>
              <section>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          Si
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-14">
                      <label for="checkbox-14">
                          No
                      </label>
                    </div>
                  </div>
                </div>
              </section>
      </form>
    </div>
  </div>
</div>
<!-- End row -->

@stop
