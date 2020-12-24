<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Topic extends Model
{
   protected $fillable = [ 'title','body','intro','dateline', 'image'];

    protected $table = 'topics';

    // public function reply(){
    //     return $this->belongsTo('App\Models\Reply');
    // }

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
   public static function add($fields)
    {
        $pages= new static;
        $pages->fill($fields);
        $pages->save();

        return $pages;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save($fields);
    }
  public function getMiniContent(){
        return Str::substr($this->body, 0, 80) . "...";
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

    public function getSeo(){
    return $this->seo()->first();
    }
}
