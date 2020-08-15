<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PDO;

class question extends Model
{
    protected $table = "questions";
    protected $guarded = [];

    public function author(){
        return $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->belongsTo('App\tag', 'questions_has_tags', 'question_id', 'tag_id');
    }
}
