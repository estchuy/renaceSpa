@section('content')
<section class="wrapper">
	<h3>
		Calculo de Cuotas
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
              	<div class="showback">
              		<button class="btn btn-primary btn-lg btn-block" type="button" onclick="javascript:calculate();">Calcular</button>
              	</div>
              </div>
              <div class="form-panel" style="display:hide">

              </div>
	      </div><!-- /content-panel -->
	  </div><!-- /col-md-12 -->
	</div><!-- /row -->
</section>
@stop
@section('scripts')
	function calculate(){
		c = document.getElementById('capital').value;
		i = document.getElementById('tasa').value;
		p = document.getElementById('cuotas').value;

		Im = i/12/100;
		Im2 = Im + 1 ;
		Im2 = Math.pow(Im2, (p*-1));
		cuatoMensual = (Im*c)/(1-Im2);
		alert('cuotaMensual');
	}
@stop