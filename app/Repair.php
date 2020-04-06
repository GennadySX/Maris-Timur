<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    //
    protected $fillable = [
        'customer_id',
        'DateClaim',
        'NumberClaim',
        'Inspector',
        'DateRepair',
        'Compensation',
    ];

    public $timestamps = false;

}
