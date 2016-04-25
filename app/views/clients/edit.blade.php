@section('content')
<h3>
  <i class="fa fa-user"> </i>{{$client->name or 'Crear Cliente'}}
</h3>
<div class="row">
  <div class="col-sm-12">
    <div class="card-box">
      <form action="#" id="wizard-validation-form" novalidate="novalidate">
        
          <div>
            <h3>Paso 1</h3>
            <section>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">Nombre y Apellidos </label>
                    <div class="col-lg-10">
                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                    </div>
                </div>
                <div class="input-group clearfix">
                   <label class="col-lg-2 control-label " for="nombre">Cumpleaños </label>
                  <input type="text" id="cumple" placeholder="yyyy/mm/dd" class="form-control">
                  <span class="input-group-addon bg-custom b-0 text-white required"><i class="icon-calender"></i></span>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">Edad </label>
                    <div class="col-sm-4">
                        <input type="text" class="required form-control autonumber" style="color:#fc2b6a;" data-v-min="1" data-v-max="150" placeholder="">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">Estado Civil </label>
                    <div class="col-lg-10">
                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-2 control-label " for="nombre">DPI </label>
                    <div class="col-lg-10">
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
                    <div class="col-lg-10">
                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                    </div>
                </div>
                
                <div class="form-group clearfix">
                    <label class="col-lg-12 control-label ">Referido </label>
                    <div class="select2-container form-control select2" id="s2id_autogen1">
                      <a tabindex="-1" class="select2-choice" href="javascript:void(0)">   
                      <span class="select2-chosen" id="select2-chosen-2">Alaska</span>
                      <abbr class="select2-search-choice-close"></abbr>   
                      <span role="presentation" class="select2-arrow"><b role="presentation"></b></span></a>
                      <label class="select2-offscreen" for="s2id_autogen2"></label>
                      <input type="text" role="button" aria-haspopup="true" class="select2-focusser select2-offscreen" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                    </div>
                    <select class="form-control select2" tabindex="-1" title="" style="display: none;">
                      <option>Select</option>
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                    </select>
                </div>
              </section>
              
              <h3>Step 2</h3>
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
          </div>
          <div class="actions clearfix">
            <ul aria-label="Pagination" role="menu">
              <li class="disabled" aria-disabled="true">
                <a role="menuitem" href="#previous">Previous</a>
              </li>
              <li aria-hidden="false" aria-disabled="false">
                <a role="menuitem" href="#next">Next</a>
              </li>
              <li style="display: none;" aria-hidden="true">
                <a role="menuitem" href="#finish">Finish</a>
              </li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End row -->

@stop
