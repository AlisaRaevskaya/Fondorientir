<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $fillable = [
        'title','intro','body','image','date_published', 'category_id'];

    protected $table = 'news';

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах

    public $timestamps = true;
    /**
         * Определяем категорию которой принадлежит новость .
         */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

  public function getDatePublishedAttribute($value)
    {
        return Date::parse($value)->format('d-m-Y H:i:s');
    }

    public function setDatePublishedAttribute($value)
    {
        $this->attributes['date_published'] = Date::parse($value)->format("Y-m-d\TH:i:s");
    }

    public function cutDateline()
    {
        return Date::parse($this->date_published)->format('d F Y');
    }

    public function getFormatDateCreate()
    {
        return $this->created_at->format('d F Y H:i');
    }

    public function getFormatDateUpdate()
    {
        return $this->updated_at->format('d F Y H:i');
    }

    public function setBodyAttribute($value)
    {
        $this->attributes['body'] = htmlspecialchars($value, ENT_HTML5);
    }

    public function getBodyAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_HTML5);
    }

    public function getIntroAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_HTML5);
    }

    public function getTitleAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_HTML5);
    }
    public function setIntroAttribute($value)
    {
        $this->attributes['intro'] = htmlspecialchars($value, ENT_HTML5);
    }


    /**
        * Удаляем оригинал
        * @param $name
        * @return mixed
        */
    public function deleteImage($name)
    {
        $path = public_path('/storage/news');

        return Storage::delete($path . $name);
    }

    /**
     * Загружаем новое изоюражение
     * @param $image
     * @return mixed|void
     */
    public function uploadImage($images)
    {
        if ($images == null) {
            return;
        }

        if ($this->images !== null) {
            Storage::delete($this->images);
        }
        $fileName = $images->store('articles');
        $newName = explode('/', $fileName);
        $this->images = $newName[1];
        $this->save();
        return $newName[1];
    }



    public function getMiniIntro()
    {
        return Str::substr($this->intro, 0, 80) . "...";
    }



    public static function add($fields)
    {
        $news= new static;
        $news->fill($fields);
        $news->save();

        return $news;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save($fields);
    }
}
