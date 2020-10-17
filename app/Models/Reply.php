<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table="replies";


    // public function comments(){
    //     return $this->belongsToMany('App\Models\Comment');
    // }
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

public function setBodyAttribute($value){
    $this->attributes['body'] = htmlspecialchars($value,ENT_HTML5);
}

public function setTitleAttribute($value){
    $this->attributes['title'] = htmlspecialchars($value,ENT_HTML5);
}

public function setIntroAttribute($value){
    $this->attributes['intro'] = htmlspecialchars($value,ENT_HTML5);
}
public function getIntroAttribute($value){
    return htmlspecialchars_decode($value,ENT_HTML5);
}
public function getBodyAttribute($value){
    return htmlspecialchars_decode($value,ENT_HTML5);
}

public function getTitleAttribute($value){
    return htmlspecialchars_decode($value,ENT_HTML5);
}
}
