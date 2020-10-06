<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //1:>
    public function comments(){
        return $this->HasMany('App\Models\Comment')
    }
    //1:1
    public function replies(){
        return $this->belongsTo('App\Models\Reply')
    }
}
