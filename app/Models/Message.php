<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    protected $guarded = [];

    public $timestamps = true;



    //1:1

    public function replies(){
        return $this->belongsTo('App\Models\Reply');
    }

    public function pages(){
        return $this->hasOne('App\Models\Page');
    }

    public function setFioAttribute()
    {
        $this->attributes['fio'] = htmlspecialchars(($this->first_name . " " . $this->first_name . " " .
        $this->father_name), ENT_HTML5);
    }

     public function getFioAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }

    public function getFormatDateCreate()
    {
        return $this->created_at->format('d F Y H:i');
    }

    public function getFormatDateUpdate()
    {
        return $this->updated_at->format('d F Y H:i');
    }


    public function setEmailAttribute($value){
        $this->attributes['email'] = htmlspecialchars($value,ENT_HTML5);
    }

    public function getEmailAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }
   public function setAddressAttribute($value){
        $this->attributes['address'] = htmlspecialchars($value,ENT_HTML5);
    }

    public function getAddressAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }
       public function setJobAttribute($value){
        $this->attributes['job'] = htmlspecialchars($value,ENT_HTML5);
    }

    public function getJobAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }

    public function setMessageAttribute($value){
        $this->attributes['message'] = htmlspecialchars($value,ENT_HTML5);
    }

    public function getMessageAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
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
