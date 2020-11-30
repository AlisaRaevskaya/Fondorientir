<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
     protected $fillable=[
        'name',
        'seo_title',
        'description',
        'keywords',
        // 'og_title',
        // 'og_description',
        // 'og_type',
        // 'og_url',
        // 'og_site_name',
    ];

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = false;

    public function setDescriptionAttribute($value){
        $this->attributes['description'] = htmlspecialchars($value, ENT_HTML5);
    }
    public function setOgDescriptionAttribute($value){
        $this->attributes['og_description'] = htmlspecialchars($value, ENT_HTML5);
    }
    public function setKeywordsAttribute($value){
        $this->attributes['keywords'] = htmlspecialchars($value, ENT_HTML5);
    }

    public function getDescriptionAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }
    public function getOgDescriptionAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }
    public function getKeywordsAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
    }
    public static function add($fields)
    {
        $page = new static;
        $page->fill($fields);
        $page->save();

        return $page;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save($fields);

    }

    public function getFormatDateCreate()
    {
        return $this->created_at->format('d F Y H:i');
    }

    public function getFormatDateUpdate()
    {
        return $this->updated_at->format('d F Y H:i');
    }

   public function page(){
        return $this->belongsTo('App\Models\Page');
    }


}
