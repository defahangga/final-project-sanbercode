<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $table = "answers";
    protected $guarded = [];

    // public function question(){
    //     return $this->('App\question', 'question_id');
    // }
}
