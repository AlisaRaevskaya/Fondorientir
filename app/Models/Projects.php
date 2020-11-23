<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'name','results','term'
    ];
    protected $table = 'projects';

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах

     public $timestamps = true;

     public function setResultsAttribute($value){
        $this->attributes['results'] = htmlspecialchars($value,ENT_HTML5);
    }
    public function getResultsAttribute($value){
        return htmlspecialchars_decode($value,ENT_HTML5);
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
