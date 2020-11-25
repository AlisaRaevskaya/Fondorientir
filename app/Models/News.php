<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
 protected $fillable = [
        'title','intro','body','dateline', 'source_link', 'source_name'];
        
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

    public function getDatelineAttribute($value)
  {
    $date = Carbon::createFromTimestamp($value)->toDateTimeString();
    return $date;
    }

    public function setDatelineAttribute($value){
    // {
    //     if(!$value){$this->attributes['dateline']=Carbon::today();}
        $this->attributes['dateline'] = Carbon::parse($value)->timestamp;
    }
    //->format('d-m-y H:i:s');

    public function cutDateline()
    {
        $result=$this->dateline;
        return Str::substr($result, 0, 10);
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
    // public function setTitleAttribute($value)
    // {
    //     $this->attributes['title'] = htmlspecialchars($value, ENT_HTML5);
    // }

    // public function getTitleAttribute($value)
    // {
    //     return htmlspecialchars_decode($value, ENT_HTML5);
    // }
    // public function setIntroAttribute($value)
    // {
    //     $this->attributes['intro'] = htmlspecialchars($value, ENT_HTML5);
    // }


 /**
     * Удаляем оригинал
     * @param $name
     * @return mixed
     */
    public function deleteImage($name)
    {
        $path = storage_path('/app/public/news');

        return Storage::delete($path . $name);
    }

    // /**
    //  * Удаляем мини картинку
    //  * @param $name
    //  * @return mixed
    //  */
    // public function deleteMiniImages($name)
    // {
    //     $path = '/articles/mini/';

    //     return Storage::delete($path . $name);
    // }

    /**
     * Загружаем новое изоюражение
     * @param $image
     * @return mixed|void
     */
    public function uploadImage($images)
    {
        if ($images == null) { return;}

        if($this->images !== null) {
            Storage::delete($this->images);
        }
        $fileName = $images->store('articles');
        $newName = explode('/',$fileName);
        $this->images = $newName[1];
        $this->save();
        return $newName[1];

    }

    // public function getImage()
    // {
    //     if ($this->images == null) {
    //         return '/images/support.png';
    //     }

    //     return '/storage/articles/' . $this->images;
    // }

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
