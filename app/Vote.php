<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [

        'sessionId',
        'vote',
        'pollId'

    ];

    public $timestamps = false;
}
