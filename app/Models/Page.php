<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $fillable = [
        'title','content','url', 'is_menu', 'published','is_second_menu','parent_id','sort_order', 'second_sort_order'];
    protected $table = 'pages';


    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах

    public $timestamps = true;

    public function menus()
    {
        return $this->belongsTo('App\Models\Menu');
    }
    public function seo()
    {
        return $this->HasOne('App\Models\Seo');
    }
    public function files()
    {
        return $this->HasMany('App\Models\File');
    }

    public function scopeIsPublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeOfSort($query, $sort)
    {
        foreach ($sort as $column => $direction) {
            $query->orderBy($column, $direction);
        }

        return $query;
    }


    public function scopeIsMenu($query)
    {
        return $query->where('is_menu', true);
    }
    public function scopeIsSecondMenu($query)
    {
        return $query->where('is_second_menu', true);
    }


    public function setContentAttribute($value)
    {
        $this->attributes['content'] = htmlspecialchars($value, ENT_HTML5);
    }
    public function getContentAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_HTML5);
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

    public function getSeo()
    {
        return $this->seo()->first();
    }

    public function getAdminUrlEdit()
    {
        if ($this->is_dynamic == 1) {
            return 'admin.' . \Str::slug($this->laravel_name) . '.edit';
        } else {
            return 'admin.pages.edit';
        }
    }
    public function getAdminUrlDestroy()
    {
        if ($this->is_dynamic == 1) {
            return 'admin.' . \Str::slug($this->laravel_name) . '.destroy';
        } else {
            return 'admin.pages.destroy';
        }
    }
}