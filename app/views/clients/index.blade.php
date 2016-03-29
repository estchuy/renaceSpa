@section('content')
<?php
$amnt = 10;
$I = 10 / 12 / 100 ;
$I2 = $I + 1 ;
$I2 = pow($I2,-6) ;

$CuotaMensual = ($I * 2500) / (1 - $I2) ;
echo $CuotaMensual;
?>
<section class="wrapper">
	<div class="row mt">
	  <div class="col-md-12">
	      <div class="content-panel">
	          <table class="table table-striped table-advance table-hover">
	      	  	  <h4><i class="fa fa-users"></i> Clientes</h4>
	      	  	  <hr>
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
	              	<tr>
		                <td><a href="clients/{{id}}/edit">Company Ltd</a></td>
		                <td>$ {{number_format($amnt, 2, '.', ',')}}</td>
		                <td>$ {{number_format($amnt, 2, '.', ',')}}</td>
		                <td><span class="label label-info label-mini"> 6 </span></td>
		                <td>18% Anual</td>
		                <td><span class="label label-info label-mini"> en Proceso </span></td>
	              	</tr>
	           	</tbody>
	          </table>
	      </div><!-- /content-panel -->
	  </div><!-- /col-md-12 -->
	</div><!-- /row -->
</section>
@stop
