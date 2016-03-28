<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Client extends Eloquent {
    use SoftDeletingTrait;
    protected $dates = ["deleted_at"];
    
    protected $fillable = array(
        'name',
        'email',
        'personal_id',
        'address',
        'phone'
    );
}