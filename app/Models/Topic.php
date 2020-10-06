<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function replies(){
        return $this->belongsTo('App\Models\Reply')
    }
}
