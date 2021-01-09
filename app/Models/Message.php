<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\MessageSent;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Message extends Model
{
    use Notifiable;

    protected $fillable = [
    'name','email','phone', 'message', 'consent','job', 'message_category_id'];

    protected $guarded = [];

    public $timestamps = true;


    public function replies()
    {
        return $this->belongsTo('App\Models\Reply');
    }

    public function pages()
    {
        return $this->hasOne('App\Models\Page');
    }

    public function messageCategory()
    {
        return $this->hasOne('App\Models\MessageCategory', 'id', 'message_category_id');
    }

    public function setDatelineAttribute($value)
    {
        $this->attributes['dateline'] = $this->created_at->format('d F Y H:i');
    }

    public function setMessageAttribute($value)
    {
        $this->attributes['message'] = htmlspecialchars($value, ENT_HTML5);
    }

    public function getNameAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_HTML5);
    }

    public function getDatelineAttribute($value)
    {
        $date = Carbon::createFromTimestamp($value)->toDateTimeString();
        return $date;
    }
    public function getFormatDateCreate()
    {
        return $this->created_at->format('d F Y H:i');
    }
    public function getFormatDateUpdate()
    {
        return $this->updated_at->format('d F Y H:i');
    }

    public function getMessageAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_HTML5);
    }
    public function getMiniContent()
    {
        return Str::substr($this->message, 0, 50) . "...";
    }
    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = Str::of($value)->trim();
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

    public function getCategory()
    {
        return $this->messageCategory;
    }

}
