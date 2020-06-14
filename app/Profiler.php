<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiler extends Model
{
    //
    protected $fillable = [
        'user_id',
        'firstName',
        'lastName',
        'middleName',
        'avatar',
        'gender',
        'birthday',
        'role_id'

    ];
}
