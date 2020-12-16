<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondMenu extends Model
{
    protected $fillable = ['title','content','url','content', 'is_menu', 'published'];

    protected $table ='second_menus';

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах

    public $timestamps = true;

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

    public function getSeo(){
    return $this->seo()->first();
    }
}
