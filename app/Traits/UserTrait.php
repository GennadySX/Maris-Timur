<?php


namespace App\Traits;


use App\Customer;

trait UserTrait
{


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
