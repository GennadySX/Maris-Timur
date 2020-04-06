<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ring extends Model
{
    //
    protected $fillable = [
        'device_id',
        'customer_id',
        'Number',
        'RingType',
        'dateRing',
        'Country',
        'Town',
        'Value',
        'Sum',
        'Comment',
    ];

    public $timestamps = false;

}
