<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Msg extends Model
{
     protected $fillable = [
        'message',
       'user_id',
     
    ];
}
