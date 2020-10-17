<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['name', 'email','body'];

//1:many
    public function topic(){
        return $this->belongsTo('App\Models\Topic', 'topic_reply_id', 'reply_id');
    }

   // >:>
    // public function replies()
    // {
    //     return $this->belongsToMany('App\Models\Reply');
    // }
}
