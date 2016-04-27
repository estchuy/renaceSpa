@section('content')
<h3>
  <i class="icon-user-follow"> </i>{{$client->name or ' Crear Cliente'}}
</h3>
<div class="row">
  <div class="col-sm-12">
    <div class="card-box">
      <form action="#" id="wizard-vertical">
            <h3>Datos Personales</h3>
            <section>
                <div class="form-group clearfix">
                    <label class="col-lg-3 control-label " for="nombre">Nombre y Apellidos </label>
                    <div class="col-lg-6">
                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                    </div>
                </div>
                <div class="form-group clearfix">
                   <label class="col-lg-3 control-label " for="cumple">Cumpleaños </label>
                   <div class="col-sm-4">
                      <div class="input-group">
                        <input type="text" style="color:#fc2b6a;" class="form-control" placeholder="mm/dd/yyyy" id="cumple">
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                       </div><!-- input-group -->
                    </div>
                    <div class="col-sm-4">
                      <label class="col-lg-4 control-label " for="edad">Edad </label>
                      <div class="col-sm-8">
                          <input id="demo0" type="text" value="18" style="color:#fc2b6a;" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
              
                      </div>
                  </div>
                </div>
                <div class="form-group clearfix">
                  

                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-3 control-label " for="estado">Estado Civil </label>
                    <div class="col-lg-6">
                      <select class="form-control select2" id="estado" name="estado" >
                        <option>Select</option>
                        <option value="Soltero/a">Soltero/a</option>
                        <option value="Comprometido/a">Comprometido/a</option>
                        <option value="Casado/a">Casado/a</option>
                        <option value="Divorciado/a">Divorciado/a</option>
                        <option value="Viudo/a">Viudo/a</option>
                      </select>
                       
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-3 control-label " for="dpi">DPI </label>
                    <div class="col-lg-6">
                        <input class="required form-control" data-mask="9999 99999 9999" style="color:#fc2b6a;" id="dpi" name="dpi" type="text">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-3 control-label " for="dir">Direccion </label>
                    <div class="col-lg-9">
                        <input class="required form-control" style="color:#fc2b6a;" id="dir" name="dir" type="text">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-3 control-label " for="email">Correo </label>
                    <div class="col-lg-6">
                        <input class="required form-control" style="color:#fc2b6a;" id="email" name="email" type="text">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-3 control-label " for="phone">Telefono/Celular </label>
                    <div class="col-lg-6">
                        <input class="required form-control" style="color:#fc2b6a;" id="phone" name="phone" type="text">
                    </div>
                </div>
                
                <div class="form-group clearfix">
                    <label class="col-lg-3 control-label ">Referido </label>
                    <div class="col-sm-6">
                      <select class="form-control select2" id="refer" name="refer" >
                        <option>Select</option>
                        <option value="AK">Estuardo Chuy</option>
                        <option value="HI">Francisco Flores</option>
                      </select>
                    </div>
                </div>
              </section>
              
              <h3>Historial Medico</h3>
              <section>
                <h4 class="m-t-0 header-title"><b>Padece o ha padecido de las siguientes enfermedades</b></h4>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-0">
                      <label for="checkbox-0">
                          Diabetes
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-1">
                      <label for="checkbox-1">
                          Hipertension Arterial
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-2">
                      <label for="checkbox-2">
                          Problemas de Tiroides
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-3">
                      <label for="checkbox-3">
                          Desorden Hormonales
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-4">
                      <label for="checkbox-4">
                          Epilepsia
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-5">
                      <label for="checkbox-5">
                          Problemas Cardiacos/Marcapasos
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-6">
                      <label for="checkbox-6">
                          Cancer
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-7">
                      <label for="checkbox-7">
                          Asma o Alergia
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-8">
                      <label for="checkbox-8">
                          Queloides
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-9">
                      <label for="checkbox-9">
                          VIH
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-10">
                      <label for="checkbox-10">
                          Enfermedad Renal
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-11">
                      <label for="checkbox-11">
                          Higado Graso
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-12">
                      <label for="checkbox-12">
                          Problemas Neurologicos
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-13">
                      <label for="checkbox-13">
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
                      <input type="checkbox" id="checkbox-15">
                      <label for="checkbox-15">
                          Eclerodermia
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-16">
                      <label for="checkbox-16">
                          Psoriasis
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-17">
                      <label for="checkbox-17">
                          Herpes
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-18">
                      <label for="checkbox-18">
                          Problemas Respiratorios
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-19">
                      <label for="checkbox-19">
                          Otros
                      </label>
                    </div>
                  </div>
                </div>
            </section>
            
              <h3>Tratamiento Medico</h3>
              <section>
                <h4 class="m-t-0 header-title"><b>Esta actualmente o durante el año pasado en algun tratamiento medico o nutricinal </b></h4>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                      <div class="checkbox checkbox-pink checkbox-circle">
                        <div class="col-md-2">
                          <input type="checkbox" id="checkbox-20">
                          <label for="checkbox-20">
                              Si
                          </label>
                        </div>
                        <div class="col-sm-9">
                        <input class="required form-control" style="color:#fc2b6a;" id="tipoTratamiento" name="tipoTratamiento" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-21">
                      <label for="checkbox-21">
                          No
                      </label>
                    </div>
                  </div>
                </div>
              </section>
            <h3>Historial Medicamento</h3>
              <section>
                <h4 class="m-t-0 header-title"><b>Esta actualmente o durante el año pasado ingiriendo</b></h4>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-22">
                      <label for="checkbox-22">
                          Vitamina E
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-23">
                      <label for="checkbox-23">
                          Gingo Biloba
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-24">
                      <label for="checkbox-24">
                          Isotretironia/Roaccutante/Isoface
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-25">
                      <label for="checkbox-25">
                          Estereoides
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-26">
                      <label for="checkbox-26">
                          Aspirina
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-27">
                      <label for="checkbox-27">
                          Walfarina
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-28">
                      <label for="checkbox-28">
                          Tranquilizantes/psicofarmacos
                      </label>
                    </div>
                  </div>
                </div>
            </section>

            <h3>Piel</h3>
              <section>
                <h4 class="m-t-0 header-title"><b>En la piel Aplica</b></h4>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-29">
                      <label for="checkbox-29">
                          Retina A
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-30">
                      <label for="checkbox-30">
                          Hidraquinona
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-31">
                      <label for="checkbox-31">
                          Esteroides
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-32">
                      <label for="checkbox-32">
                          Protector Solar
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-33">
                      <label for="checkbox-33">
                          Cremas antiedad
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-34">
                      <label for="checkbox-34">
                          Tonico
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-35">
                      <label for="checkbox-35">
                          Jabon 
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-36">
                      <label for="checkbox-36">
                          Humectante
                      </label>
                    </div>
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-37">
                      <label for="checkbox-37">
                          Serum/Exfoliante
                      </label>
                    </div>
                  </div>
                </div>
            </section>
            
            <h3>Embarazada o Lactancia</h3>
              <section>
                <h4 class="m-t-0 header-title"><b>Esta usted embarazada o dando lactancia materna?</b></h4>
                <div class="form-group clearfix">
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-38">
                      <label for="checkbox-38">
                          Si
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="checkbox checkbox-pink checkbox-circle">
                      <input type="checkbox" id="checkbox-39">
                      <label for="checkbox-39">
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
