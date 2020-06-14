<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //

    protected $fillable = [
      'abonent_id',
      'manager_id',
      'chat'
    ];
}
