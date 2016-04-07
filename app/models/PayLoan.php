<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PayLoan extends Eloquent {
    use SoftDeletingTrait;
    protected $dates = ["deleted_at"];
    
    protected $fillable = array(
        'loan_id',
        'paymentNumber'
    );

    public static function gethistory($paymentNumber){
    	$history = PayLoan::select('loans.*', 'clients.name')
    	->join('loans', 'loans.id', '=', 'payloans.loan_id')
    	->join('clients', 'clients.id', '=', 'loans.client_id')
    	->where('paymentNumber', $paymentNumber)
    	->get();
    	
    	return $history;
    }
}