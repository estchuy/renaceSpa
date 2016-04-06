@section('content')
<script type="text/javascript">
  function selectAll(){
    i = 0;
    while(document.getElementById(i)){
    	if(document.getElementById('select').value == 'checked'){
    		document.getElementById(i).checked = false;
    	}else{
    		document.getElementById(i).checked = true;
    	}
    	i++;
    }
    if(document.getElementById('select').value == 'checked'){
		document.getElementById('select').value = "";
	}else{
		document.getElementById('select').value = "checked";
	}
  }
</script>
<section class="wrapper">
	<form method="post" id="aplicarPago" action="/reporte/apply">
		<div class="row">
		<div class="col-md-3"></div>
		  <div class="col-md-6">
		      <div class="content-panel">
		          <table class="table table-striped table-advance table-hover">
		          	<div class="form-group">
				       	<label class="col-sm-5 control-label"><h4><i class="fa fa-users"></i> Reporte Detallado</h4></label>
			            <div class="col-sm-12">
			             	<hr>
			            </div>
					</div>
		              <thead>
		              <tr>
		                  <th><i class="fa fa-user"></i> Cliente</th>
		                  <th><i class="fa fa-sort-numeric-asc"></i> Cuota</th>
		                  <th><i class="fa fa-money"></i> Monto</th>
		                  <th>
		                  	<a onclick="javascript:selectAll();"><i class="fa fa-check-square"></i></a>
		                  	<input type="hidden" id="select" name="select" value="checked" />
		                  </th>
		              </tr>
		              </thead>
		              <tbody>
		              	<?php 
		              		$totalPay = 0;
		              		$i = 0;
		              	?>
		              @foreach($loans as $loan)	
		              	<tr>
			                <td>{{$loan->name}}</td>
			                <td>{{$loan->period_id."/".$loan->total_of_periods}}</td>
			                <td>Q{{number_format($loan->monthly_payment, 2, '.', ',')}}</td>
			                <td>
			                	<input type="checkbox" id="{{$i}}"  class="checked" checked="checked" value="1">
			                	<input type="hidden" id="loan_id_{{$i}}" value="{{$loan->id}}" name="loan_id_{{$i}}" />
			                </td>
		              	</tr>
		              	<?php
		              		$totalPay = $totalPay + $loan->monthly_payment;
		              		$i++;
		              	?>
		              	@endforeach
		           	</tbody>
		           	<thead>
		           		<tr>
		           			<th colspan="2"><strong>Total</strong></th>
		           			<th><strong>Q{{number_format($totalPay, 2, '.', ',')}}</strong></th>
		           			<th>
		           				<input type="hidden" id="total_Loans" value="{{$i}}" name="total_Loans" />
		           			</th>
		           		</tr>
		           	</thead>
		          </table>
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
	</form>
</section>
@stop