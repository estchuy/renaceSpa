@section('content')
<section class="wrapper">
	<div class="row">
		<div class="col-md-3"></div>
	  	<div class="col-md-6">
	      <div class="content-panel">
          	<div class="form-group">
		       	<label class="col-sm-5 control-label"><h4><i class="fa fa-money"></i> Historico de Pagos</h4></label>
	            <div class="col-sm-12">
	             	<hr>
	            </div>
			</div>
			@foreach($history as @data)
				<table class="table table-striped table-advance table-hover mt">
	              <thead>
		              <tr>
		                  <th colspan="4" align="center"><strong>Pago # {{$data->paymentNumber}}</strong></th>
		              </tr>
	              </thead>
	              <thead>
		              <tr>
		              	  <th>#</th>
		                  <th><i class="fa fa-user"></i> Cliente</th>
		                  <th><i class="fa fa-sort-numeric-asc"></i> Cuota</th>
		                  <th><i class="fa fa-money"></i> Monto</th>
		              </tr>
	              </thead>
	              <tbody>
	              	<?php 
	              		$totalPay = 0;
	              		$i = 1;
	              		$loans = PayLoan::gethistory($data->paymentNumber);
	              	?>
	              @foreach($loans as $loan)	
	              	<tr>
	              		<td>{{$i}}</td>
		                <td>{{$loan->name}}</td>
		                <td>{{$loan->period_id."/".$loan->total_of_periods}}</td>
		                <td>Q{{number_format($loan->monthly_payment, 2, '.', ',')}}</td>
	              	</tr>
	              	<?php
	              		$totalPay = $totalPay + $loan->monthly_payment;
	              		$i++;
	              	?>
	              	@endforeach
	           	</tbody>
	           	<thead>
	           		<tr>
	           			<th colspan="3"><strong>Total</strong></th>
	           			<th><strong>Q{{number_format($totalPay, 2, '.', ',')}}</strong></th>
	           		</tr>
	           	</thead>
	          </table>
	         @endforeach
	      </div><!-- /content-panel -->
	  	</div><!-- /col-md-6 -->
	  	<div class="col-md-3"></div>
	</div><!-- /row -->
	<div class="row mt">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			
				<div class="col-md-2">
					<form method="post" id="download" action="/reporte/download">
						<input type="hidden" id="action" name="action" value="detallado">
						<button class="btn btn-warning" type="submit" form="download">
							<i class="fa fa-download"></i>
							PDF
						</button>
					</form>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<input type="hidden" id="action" name="action" value="detallado">
					<button class="btn btn-success" type="submit" form="aplicarPago">
						<i class="fa fa-sign-out"></i>
						Aplicar Pago
					</button>
				</div>
			
		</div>
		<div class="col-md-3"></div>
	</div>
</section>
@stop