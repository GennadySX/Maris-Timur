<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    //
    protected $fillable = [
        'customer_id',
        'device_id',
        'MapPhone',
        'DateMap',
        'MapCount',
        'Account',
        'Bank',
        'PhoneAddress',
        'Value',
        'ExemptType',
        'Exempt',
    ];

    public $timestamps = false;

}
