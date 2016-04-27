@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><i class="md icon-people "></i> <b>Clientes</b></h4>
            <div class="button-list">
	            <a href="/clients/new" type="button" class="btn btn-default btn-rounded waves-effect waves-light">Crear Cliente
	               <span class="btn-label btn-label-right"><i class="icon-user-follow"></i>
	               </span>
	            </a>
        	</div>
            <p class="text-muted font-13 m-b-30">
            </p>
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Servicios</th>
                        <th>Total Pagado</th>
                        <th>Total Invertido</th>
                        <th></th>
                    </tr>
                </thead>


                <tbody>
                    @foreach($clients as $client)	
	              <?php
	              	$loanDetails = Loan::getLoanInfo($client->id);
	              	$countLoans = 0;
	              	$totalLoans = 0;
	              	$totalMonth = 0;
	              	if(isset($loanDetails->count_loan)){
		              	$countLoans = $loanDetails->count_loan;
		              	$totalLoans = $loanDetails->totalLoan;
		              	$totalMonth = $loanDetails->monthly_payment;
		            }
	              ?>
	              	<tr>
		                <td><a href="clients/{{$client->id}}/edit">{{$client->name}}</a></td>
		                <td>{{$countLoans}}</td>
		                <td>Q{{number_format($totalMonth, 2, '.', ',')}}</td>
		                <td>Q{{number_format(Loan::getTotalInteresLoanClient($client->id), 2, '.', ',')}}</td>
		                <td></td>
		             </tr>
	              	@endforeach
	           	</tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
