@section('content')
<script type="text/javascript">
  function calculate(client_id){
    document.getElementById("resultCalculo").style.display = 'hidden';
    c = document.getElementById('capital').value;
    i = document.getElementById('tasa').value;
    p = document.getElementById('cuotas').value;

    Im = i/12/100;
    Im2 = Im + 1 ;
    Im2 = Math.pow(Im2, (p*-1));
    cuotaMensual = (Im*c)/(1-Im2);
    cuotaMensual = cuotaMensual.toFixed(2);
    headerTableHtml = '<form method="post" class="form-horizontal tasi-form" id="clientLoan" action="/loan/save">';
    headerTableHtml += '<input type="hidden" id="client_id" name="client_id" value='+client_id+' />';
    headerTableHtml += '<input type="hidden" id="amnt" name="amnt" value='+c+' />';
    headerTableHtml += '<input type="hidden" id="interesGlobal" name="interesGlobal" value='+i+' />';
    headerTableHtml += '<button class="btn btn-round btn-success" type="submit" form="clientLoan">Crear</button>';
    headerTableHtml += ' <table class="table table-hover"><thead><tr><th>#</th><th>Cuota Nivelada</th><th>Intereses</th><th>Capital</th><th>Saldo</th></tr></thead><tbody>';
    capital = c;
    ii = 0;
    interesTotal = 0;
    while(ii < p){
      interes = (capital * ((i/100)/12)).toFixed(2);
      interesTotal = parseFloat(interesTotal) + parseFloat(interes);
      capitalMes = (cuotaMensual-interes).toFixed(2);
      capital = (capital - capitalMes).toFixed(2);

      if(capital < 1 && capital > 0){
        interes = parseFloat(interes) + parseFloat(capital);
        interesTotal = parseFloat(interesTotal) + parseFloat(capital);
        capital = (0).toFixed(2);
      }
      if(capital < 0){
        capital = (0).toFixed(2);
      }

      ii++;

      headerTableHtml += '<tr><td>'+ii;
      //hidden values
      headerTableHtml += '<input type="hidden" id="cuotas['+ii+'][cuotaMensual]" name="cuotas['+ii+'][cuotaMensual]" value='+cuotaMensual+' />';
      headerTableHtml += '<input type="hidden" id="cuotas['+ii+'][interes]" name="cuotas['+ii+'][interes]" value='+interes+' />';
      headerTableHtml += '<input type="hidden" id="cuotas['+ii+'][capitalMes]" name="cuotas['+ii+'][capitalMes]" value='+capitalMes+' />';
      headerTableHtml += '<input type="hidden" id="cuotas['+ii+'][capital]" name="cuotas['+ii+'][capital]" value='+capital+' />';
      headerTableHtml += '</td><td>Q '+cuotaMensual+'</td><td>Q '+interes+'</td><td>Q '+capitalMes+'</td><td>Q '+capital+'</td></tr>';
    }
    interesTotal = interesTotal.toFixed(2);
    headerTableHtml += '</tbody></table></form>';
      document.getElementById("resultCalculo").innerHTML = "<strong>Interes Total Q "+interesTotal+"</strong><br>"+headerTableHtml;
      document.getElementById("resultCalculo").style.display = 'block';
  }
</script>
<section class="wrapper">
  <h3>
    Calculo de Cuotas - {{$client->name}}
  </h3>
  <div class="row mt">
    <div class="col-md-12">
        <div class="form-panel">
            <div class="form-group">
                  <label class="col-sm-1 col-sm-2 control-label">Capital</label>
                  <div class="col-sm-2">
                      <input type="text" id="capital" name="capital"  placeholder="Capital" class="form-control">
                  </div>
                  <label class="col-sm-1 col-sm-2 control-label">Tiempo/meses</label>
                  <div class="col-sm-2">
                      <input type="text" id="cuotas" name="cuotas"  placeholder="Cuotas" class="form-control">
                  </div>
                  <label class="col-sm-1 col-sm-2 control-label">Tasa</label>
                  <div class="col-sm-2">
                      <input type="text" id="tasa" name="tasa"  placeholder="tasa %" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                <div style="padding-top:30px">
                  <button class="btn btn-primary btn-lg btn-block" type="button" onclick="javascript:calculate({{$client->id}});"><i class="fa fa-cog"> </i> Proyectar</button>
                </div>
              </div>
                <!-- resultado de proyeccion -->
                <div class="form-group mt" id="resultCalculo" style="display:hidden">

                </div>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
  </div><!-- /row -->
</section>
@stop