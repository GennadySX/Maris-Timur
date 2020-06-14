<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonent extends Model
{
    //

    protected $fillable = [
        'user_id'
    ];


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id')->with(
            'profile'
        );
    }



}
