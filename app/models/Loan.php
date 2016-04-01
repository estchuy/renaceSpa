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

    public function getDetailLoans($parentId)
    {
        return Loan::where('parent_id', $parent_id)->orderBy('period_id','asc')->get();
    }
}