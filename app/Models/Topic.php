<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Topic extends Model
{
    protected $table = 'topics';

    public function reply(){
        return $this->belongsTo('App\Models\Reply');
    }

    public function comments(){
        return $this->HasMany('App\Models\Comment', 'topic_reply_id', 'reply_id');
    }

    public function getFormatDateCreate()
    {
        return $this->created_at->format('d F Y H:i');
    }

    public function getFormatDateUpdate()
    {
        return $this->updated_at->format('d F Y H:i');
    }

    public function getDatelineAttribute($value)
    {
        $date = Carbon::createFromTimestamp($value)->toDateTimeString();
        return $date;
    }

    public function setDatelineAttribute($value)
{
    $this->attributes['dateline'] = Carbon::parse($value)->timestamp;
}
}
