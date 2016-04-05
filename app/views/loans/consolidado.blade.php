@section('content')
<section class="wrapper">
	<div class="row">
	<div class="col-md-4"></div>	
	  <div class="col-md-4">
	      <div class="content-panel">
	          <table class="table table-striped table-advance table-hover">
	          	<div class="form-group">
			       	<label class="control-label"><h4><i class="fa fa-users"></i> Reporte Consolidado</h4></label>
		            <div class="col-sm-12">
		             	<hr>
		            </div>
				</div>
	              <thead>
	              <tr>
	                  <th><i class="fa fa-sort-numeric-asc"></i> Total Prestamos</th>
	                  <th><i class="fa fa-money"></i> Monto</th>
	                  <th></th>
	              </tr>
	              </thead>
	              <tbody>
	              	<tr>
		                <td style="padding-left:60px"><h4>{{$totalLoans}}</h4></td>
		                <td><h4><strong>Q{{number_format($totalMontly, 2, '.', ',')}}</strong></h4></td>
	              	</tr>
	           	</tbody>
	          </table>
	      </div><!-- /content-panel -->
	  </div><!-- /col-md-4 -->
	  <div class="col-md-4"></div>
	</div><!-- /row -->
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="content-panel">
				<div class="col-md-2">
					<form method="post" id="download" action="/reporte/download">
						<input type="hidden" id="action" name="action" value="consolidado">
						<button class="btn btn-warning" type="button" type="submit" form="download">
							<i class="fa fa-download"></i>
							PDF
						</button>
					</form>
				</div>
				<div class="col-md-2">
					<form method="post" id="aplicarPago" action="/reporte/apply">
						<input type="hidden" id="action" name="action" value="consolidado">
						<button class="btn btn-warning" type="button" type="submit" form="aplicarPago">
							<i class="fa fa-sign-out"></i>
							Aplicar Pago
						</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</section>
@stop