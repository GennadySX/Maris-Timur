<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    //
    protected $fillable = [
        'device_id',
        'customer_id',
        'DateClaim',
        'NumberClaim',
        'Inspector',
        'DateRepair',
        'Compensation',
    ];

    public $timestamps = false;

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id');
    }
}
