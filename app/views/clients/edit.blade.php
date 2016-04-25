@section('content')
<script type="text/javascript">
  function switchClassi(){
    div = document.getElementById('loanHistoryDiv').style.display;
    if(div == 'none'){
      document.getElementById('loanHistoryDiv').style.display = 'block';
      document.getElementById('buttonHistorico').innerHTML = '<i class="fa fa-chevron-circle-up"></i> Ocultar';
    }else{
      document.getElementById('loanHistoryDiv').style.display = 'none';
      document.getElementById('buttonHistorico').innerHTML = '<i class="fa fa-chevron-circle-down"></i> Mostrar';
    }
  }
</script>
<section class="wrapper">
  <h3>
    <i class="fa fa-user"></i>{{$client->name or 'Crear Cliente'}}
  </h3>
<div class="row">
              <div class="col-sm-12">
                <div class="card-box">
                  <h4 class="m-t-0 header-title"><b>{{$client->name or 'Crear'}}</b></h4>
                  <p class="text-muted m-b-30 font-13">
                    Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                  </p>
                  
                  <form id="wizard-validation-form" action="#">
                                        <div>
                                            <h3>Datos Generales</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="nombre">Nombre y Apellidos </label>
                                                    <div class="col-lg-10">
                                                        <input class="required form-control" style="color:#fc2b6a;" id="nombre" name="nombre" type="text">
                                                    </div>
                                                </div>
                                                <div class="input-group clearfix">
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
                                            <h3>Step 3</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <div class="col-lg-12">
                                                        <ul class="list-unstyled w-list">
                                                          <li><b>First Name :</b> Jonathan </li>
                                                          <li><b>Last Name :</b> Smith </li>
                                                          <li><b>Emial:</b> jonathan@smith.com</li>
                                                          <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                      </ul>
                                                    </div>
                                                </div>
                                            </section>
                                            <h3>Step Final</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <div class="col-lg-12">
                                                        <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                                        <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                                    </div>
                                                </div>

                                            </section>
                                        </div>
                                    </form>
                </div>
              </div>
            </div>
                        <!-- End row -->
@stop
