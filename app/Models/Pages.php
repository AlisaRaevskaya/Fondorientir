<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
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

}
