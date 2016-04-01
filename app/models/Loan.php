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

    public static function getDetailLoans($parentId)
    {
        return Loan::where('parent_id', $parentId)->orderBy('period_id','asc')->get();
    }

    public static function getLoanInfo($client_id)
    {
        return Loan::select(DB::raw('count(period_id) as `count_loan`', 'sum(amnt) as `totalLoan`', 'sum(monthly_payment) as `monthly_payment`'))
        ->where('client_id', $client_id)
        ->where('period_id', 1)
        ->groupBy('client_id')
        ->first();
    }

    public static function getTotalInteresLoanClient($client_id)
    {
        $totalInterest = Loan::select(DB::raw('sum(interest_fee) as totalInterest'))
        ->where('client_id', $client_id)
        ->first();

        return $totalInterest->totalInterest;
    }
}