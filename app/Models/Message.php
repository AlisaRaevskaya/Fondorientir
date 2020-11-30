<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Message extends Model
{
     protected $fillable = [
    'name','email','phone','address', 'message', 'status', 'consent','job', 'message_category_id'];

    protected $guarded = [];

    public $timestamps = true;

    //1:1

    public function replies(){
        return $this->belongsTo('App\Models\Reply');
    }

    public function pages(){
        return $this->hasOne('App\Models\Page');
    }

    public function category(){
        return $this->hasOne('App\Models\MessageCategory');
    }

    public function setDatelineAttribute($value)
    {
        $this->attributes['dateline'] = Carbon::parse($value)->timestamp;
    }

    public function setMessageAttribute($value){
        $this->attributes['message'] = htmlspecialchars($value,ENT_HTML5);
    }

    public function getFioAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }

     public function getDatelineAttribute($value)
  {
    $date = Carbon::createFromTimestamp($value)->toDateTimeString();
    return $date;
    }

    public function getFormatDateUpdate()
    {
        return $this->updated_at->format('d F Y H:i');
    }

    public function getMessageAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }
    public function getMiniContent(){
        return Str::substr($this->message, 0, 80) . "...";
    }

    //+ where(is_read)//count();
    //  public function countMessage($id){
    //    return $this->category->where('id', $id)->where('is_read', false)->count();
    // }
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
}
