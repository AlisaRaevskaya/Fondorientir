<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // protected $table = 'categories';
    // protected $fillable = ['name', 'description'];

//1:1
    public function messages(){
        return $this->belongsTo('App\Models\Message')
    }
   // >:>
    public function replies()
    {
        return $this->belongsToMany('App\Models\Reply');
    }
}
