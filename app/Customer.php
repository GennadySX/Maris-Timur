<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'customer_id',
        'CustomerType',
        'CustomerFio',
        'CustomerName',
        'CustomerInn',
        'Chief',
    ];

    public $timestamps = false;
}
