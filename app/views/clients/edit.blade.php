@section('content')
<script type="text/javascript">
  function switchClassi(){
    div = document.getElementById('loanHistoryDiv').style.display;
    if(div == 'none'){
      document.getElementById('loanHistoryDiv').style.display = 'block';
      document.getElementById('buttonHistorico').text = '<i class="fa fa-chevron-circle-up"></i> Ocultar';
    }else{
      document.getElementById('loanHistoryDiv').style.display = 'none';
      document.getElementById('buttonHistorico').text = '<i class="fa fa-chevron-circle-down"></i> Mostrar';
    }
  }
</script>
<section class="wrapper">
	<h3>
		<i class="fa fa-user"></i> Cliente {{$client->name or 'Crear'}}
	</h3>
	<div class="row mt">
	  <div class="col-md-12">
	      <div class="form-panel">
          <form method="post" class="form-horizontal tasi-form" id="clientInfo" action="/client/save">
  	        <div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">Nombre</label>
                 	<div class="col-sm-5">
                    <input type="hidden" id="id" name="id" value="{{$client->id or 0}}" />
                   	<input type="text" id="nombre" name="nombre"  placeholder="Nombre" value="{{$client->name or ''}}" class="form-control round-form">
                 	</div>
          	</div>
          	<div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">DPI</label>
                 	<div class="col-sm-5">
                   	<input type="text" id="dpi" name="dpi"  placeholder="Documento Personal de Identificacion" value="{{$client->personal_id or ''}}" class="form-control round-form">
                 	</div>
          	</div>
          	<div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">Direccion</label>
                 	<div class="col-sm-5">
                   	<input type="text" id="address" name="address"  placeholder="Direccion" value="{{$client->address or ''}}" class="form-control round-form">
                 	</div>
          	</div>
          	<div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">Telefono</label>
                 	<div class="col-sm-5">
                   	<input type="text" id="phone" name="phone"  placeholder="Telefono" value="{{$client->phone or ''}}" class="form-control round-form">
                 	</div>
          	</div>
          	<div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">Email</label>
                 	<div class="col-sm-5">
                   	<input type="text" id="email" name="email"  placeholder="Direccion de Correo Electronico" value="{{$client->email or ''}}" class="form-control round-form">
                 	</div>
          	</div>
            <div class="form-group">
              <div style="padding-top:30px">
                  <button type="submit" form="clientInfo" class="btn btn-primary btn-lg btn-block" type="button"><i class="fa fa-cog"> </i> Guardar</button>
                </div>
            </div>
          </form>
	      </div><!-- /content-panel -->
        @if(isset($edit))
          @if(count($loans) == 0)
            <div class="form-panel">
              <div class="form-group">
                <button class="btn btn-primary btn-lg" type="button" onclick="javascript:window.location = '/loan/{{$client->id}}/new';">Crear Prestamo</button>
              </div>
            </div>
          @else
            <!-- Resumen de Pagos -->
            <div class="form-panel">
              <div class="form-group">
                <h4 class="mb"> Historial </h4>
                <button id="buttonHistorico" class="btn btn-theme" type="button" onclick="javascript:switchClassi();"><i class="fa fa-chevron-circle-down"></i> Mostrar</button>
                <button class="btn btn-primary btn-lg" type="button" onclick="javascript:window.location = '/loan/{{$client->id}}/new';">Crear Prestamo</button>
              </div>
              <div class="form-group" id="loanHistoryDiv" style="display:none;">
                  
                    <div class="content-panel">
                      <?php $i = 1;?>
                      @foreach($loans as $loan)
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-users"></i> Prestamo # {{$i}} - <strong>Q{{number_format($loan->amnt, 2, '.', ',')}}</strong></h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-user"></i> Plazo</th>
                                <th><i class="fa fa-bookmark"></i> Cuotas</th>
                                <th><i class="fa fa-bookmark"></i> Interes</th>
                                <th><i class="fa fa-bookmark"></i> Capital</th>
                                <th><i class="fa fa-bookmark"></i> Saldo</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                              $loanDetails = Loan::getDetailLoans($loan->id);
                            ?>
                            @foreach($loanDetails as $loanDetail) 
                              <tr>
                                <td>{{$loanDetail->period_id}}</td>
                                <td>Q{{number_format($loanDetail->monthly_payment, 2, '.', ',')}}</td>
                                <td>Q{{number_format($loanDetail->interest_fee, 2, '.', ',')}}</td>
                                <td>Q{{number_format($loanDetail->capital, 2, '.', ',')}}</td>
                                <td>Q{{number_format($loanDetail->balance, 2, '.', ',')}}</td>
                                <td>
                                  @if($loanDetail->pay == 0)
                                    <span class="badge bg-important">Pendiente</span>
                                  @else
                                    <span class="badge bg-success">Pagado</span>
                                  @endif
                                </td>
                              </tr>
                              @endforeach
                          </tbody>
                        </table>
                        <?php $i++;?>
                        @endforeach
                    </div><!-- /content-panel -->
              </div>
            </div><!-- End loans history -->
          @endif
        @endif
	  </div><!-- /col-md-12 -->
	</div><!-- /row -->
</section>
@stop
