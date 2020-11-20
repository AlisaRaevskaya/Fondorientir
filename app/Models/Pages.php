<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Pages extends Model
{
//  protected $fillable = [
//         'name','page_id','mode'
//     ];
    protected $table = 'pages';

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах

     public $timestamps = true;

    public function menus(){
        return $this->belongsTo('App\Models\Menu');
    }
    public function images(){
        return $this->HasMany('App\Models\Image');
    }
    public function setContentAttribute($value){
        $this->attributes['content'] = htmlspecialchars($value,ENT_HTML5);
    }
    public function getContentAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }

/**
     * Удаляем оригинал
     * @param $name
     * @return mixed
     */
    public function deleteImages($name)
    {
        $path = '/articles/';

        return Storage::delete($path . $name);
    }

    /**
     * Удаляем мини картинку
     * @param $name
     * @return mixed
     */
    public function deleteMiniImages($name)
    {
        $path = '/articles/mini/';

        return Storage::delete($path . $name);
    }



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
