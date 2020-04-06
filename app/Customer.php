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


    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'customer_id');
    }

}
