@section('content')
<section class="wrapper">
	<div class="row">
	  <div class="col-md-12">
	      <div class="content-panel">
	          <table class="table table-striped table-advance table-hover">
	          	
		      	 	<div class="form-group">
				       	<label class="col-sm-2 control-label"><h4><i class="fa fa-users"></i> Reporte Detallado</h4></label>
			            <div class="col-sm-12">
			             	<hr>
			            </div>
	  				</div>
  				
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
		                <td><a href="clients/{{$client->id}}/edit">{{$loan->name}}</a></td>
		                <td>{{$loan->period_id."/".$loan->total_of_periods}}</td>
		                <td>Q{{number_format($loan->monthly_payment, 2, '.', ',')}}</td>
	              	</tr>
	              	@endforeach
	           	</tbody>
	          </table>
	      </div><!-- /content-panel -->
	  </div><!-- /col-md-12 -->
	</div><!-- /row -->
</section>
@stop