@section('content')
<section class="wrapper">
	<div class="row">
	  <div class="col-md-12">
	      <div class="content-panel">
	          <table class="table table-striped table-advance table-hover">
	          	
		      	 	<div class="form-group">
				       	<label class="col-sm-2 control-label"><h4><i class="fa fa-users"></i> Reporte Consolidado</h4></label>
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
		                <td>{{$totalLoans}}</td>
		                <td>Q{{number_format($totalMontly, 2, '.', ',')}}</td>
	              	</tr>
	           	</tbody>
	          </table>
	      </div><!-- /content-panel -->
	  </div><!-- /col-md-12 -->
	</div><!-- /row -->
</section>
@stop