@section('content')
<section class="wrapper">
	<div class="row mt">
	  <div class="col-md-12">
	      <div class="content-panel">
	          <table class="table table-striped table-advance table-hover">
	          	<form method="get" class="form-horizontal tasi-form" id="clientForm" action="/clients">
		      	 	<div class="form-group">
				       	<label class="col-sm-2 control-label"><h4><i class="fa fa-users"></i> Clientes</h4></label>
			  			<div class="col-sm-5">
			            	<input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control round-form">
			            </div>
			  			<div class="col-sm-1">
			            	<button type="button" class="btn btn-round btn-warning" onclick="javascript:document.getElementById('clientForm').submit();">Buscar</button>
			  			</div>
			  			<div class="col-sm-1">
			            	<button type="button" class="btn btn-round btn-primary" onclick="javascript:window.location = '/clients/new';">Nuevo</button>
			  			</div>
			            <div class="col-sm-12">
			             	<hr>
			            </div>
	  				</div>
  				</form>
	              <thead>
	              <tr>
	                  <th><i class="fa fa-user"></i> Cliente</th>
	                  <th><i class="fa fa-bookmark"></i> Prestamo</th>
	                  <th><i class="fa fa-bookmark"></i> Cuotas</th>
	                  <th><i class="fa fa-bookmark"></i> Plazo</th>
	                  <th><i class="fa fa-bookmark"></i> Interes</th>
	                  <th><i class=" fa fa-edit"></i> Status</th>
	                  <th></th>
	              </tr>
	              </thead>
	              <tbody>
	              @foreach($clients as $client)	
	              	<tr>
		                <td><a href="clients/{{$client->id}}/edit">{{$client->name}}</a></td>
		                <td>Q{{number_format($client->amnt, 2, '.', ',')}}</td>
		                <td>Q{{number_format($client->monthly_payment, 2, '.', ',')}}</td>
		                <td><span class="label label-info label-mini">{{$client->period_id}}</span></td>
		                <td>{{$client->interest}}</td>
		                <td><span class="label label-info label-mini"> en Proceso </span></td>
	              	</tr>
	              	@endforeach
	           	</tbody>
	          </table>
	      </div><!-- /content-panel -->
	  </div><!-- /col-md-12 -->
	</div><!-- /row -->
</section>
@stop
