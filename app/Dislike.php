<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
      protected $fillable = [
        'user_id', 'post_id', 'email',
    ];
}
