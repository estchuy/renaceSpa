@section('content')
<section class="wrapper">
	<div class="row">
		<div class="col-md-3"></div>
	  <div class="col-md-6">
	      <div class="content-panel">
	      	<div class="form-group">
		       	<label class="col-sm-5 control-label"><h4><i class="fa fa-users"></i> Reporte Detallado</h4></label>
	            <div class="col-sm-12">
	             	<hr>
	            </div>
			</div>
			<div class="col-sm-12">
	          <table class="table table-striped table-advance table-hover">
	              <thead>
	              <tr>
	                  <th><i class="fa fa-user"></i> Cliente</th>
	                  <th><i class="fa fa-sort-numeric-asc"></i> Cuota</th>
	                  <th><i class="fa fa-th"></i> Monto</th>
	                  <th></th>
	              </tr>
	              </thead>
	              <tbody>
	              @foreach($loans as $loan)	
	              	<tr>
		                <td>{{$loan->name}}</td>
		                <td>{{$loan->period_id."/".$loan->total_of_periods}}</td>
		                <td>Q{{number_format($loan->monthly_payment, 2, '.', ',')}}</td>
	              	</tr>
	              	@endforeach
	           	</tbody>
	          </table>
	         </div>
	      </div><!-- /content-panel -->
	  </div><!-- /col-md-6 -->
	  <div class="col-md-3"></div>
	</div><!-- /row -->
</section>
@stop