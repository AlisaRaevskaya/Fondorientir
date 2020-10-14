<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    //1:1
    public function replies(){
        return $this->belongsTo('App\Models\Reply');
    }
    public function pages(){
        return $this->hasOne('App\Models\Page');
    }
}
