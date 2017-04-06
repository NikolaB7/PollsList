<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
        'id',
        'question',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'answer5'

    ];

    public $timestamps = false;



    public function polls(){

return $this->hasMany('App\Poll');

    }

}