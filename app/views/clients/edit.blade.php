@section('content')
<section class="wrapper">
	<h3>
		<i class="fa fa-user"></i> Cliente
	</h3>
	<div class="row mt">
	  <div class="col-md-12">
	      <div class="form-panel">
          <form method="get" class="form-horizontal tasi-form">
  	        <div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">Nombre</label>
                 	<div class="col-sm-5">
                   	<input type="text" id="nombre" name="nombre"  placeholder="Nombre" value="{{$client->name}}" class="form-control round-form">
                 	</div>
          	</div>
          	<div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">DPI</label>
                 	<div class="col-sm-5">
                   	<input type="text" id="dpi" name="dpi"  placeholder="Documento Personal de Identificacion" value="{{$client->personal_id}}" class="form-control round-form">
                 	</div>
          	</div>
          	<div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">Direccion</label>
                 	<div class="col-sm-5">
                   	<input type="text" id="address" name="address"  placeholder="Direccion" value="{{$client->address}}" class="form-control round-form">
                 	</div>
          	</div>
          	<div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">Telefono</label>
                 	<div class="col-sm-5">
                   	<input type="text" id="phone" name="phone"  placeholder="Telefono" value="{{$client->phone}}" class="form-control round-form">
                 	</div>
          	</div>
          	<div class="form-group">
                	<label class="col-sm-1 col-sm-2 control-label">Email</label>
                 	<div class="col-sm-5">
                   	<input type="text" id="email" name="email"  placeholder="Direccion de Correo Electronico" value="{{$client->email}}" class="form-control round-form">
                 	</div>
          	</div>
          </form>
	      </div><!-- /content-panel -->
	  </div><!-- /col-md-12 -->
	</div><!-- /row -->
</section>
@stop
