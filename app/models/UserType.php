<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class UserType extends Eloquent {
    use SoftDeletingTrait;
    protected $dates = ["deleted_at"];
    
    protected $fillable = array(
        'name'
    );
}