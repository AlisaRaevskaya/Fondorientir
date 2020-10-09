<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table="replies";
//>:>
    public function comments(){
        return $this->belongsToMany('App\Models\Comment');
    }
    //1:1
    public function messages(){
        return $this->hasOne('App\Models\Message');
    }
    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    //* Get the topic record associated with the reply.
    public function topic(){
        return $this->hasOne('App\Models\Topic');
    }
}
