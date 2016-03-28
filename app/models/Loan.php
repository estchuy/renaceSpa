<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Loan extends Eloquent {
    use SoftDeletingTrait;
    protected $dates = ["deleted_at"];
    
    protected $fillable = array(
        'client_id',
        'amnt',
        'period_id',
        'monthly_payment',
        'interest'
    );
}