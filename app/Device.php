<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    protected $fillable = [
        'customer_id',
        'Number',
        'Value',
    ];

    public $timestamps = false;

}
