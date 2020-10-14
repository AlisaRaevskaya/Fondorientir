<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function reply(){
        return $this->belongsTo('App\Models\Reply');
    }
    public function comments(){
        return $this->HasMany('App\Models\Comment');
    }
}
