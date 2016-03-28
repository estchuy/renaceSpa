<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent {
    use SoftDeletingTrait;
    protected $dates = ["deleted_at"];
    
    protected $fillable = array(
    	'username'
        'name',
        'email',
        'hashpasw',
        'user_type_id',
        'phone'
    );
}