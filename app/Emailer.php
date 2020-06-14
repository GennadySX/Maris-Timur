<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emailer extends Model
{
    //

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'subject',
        'message',
    ];
}
