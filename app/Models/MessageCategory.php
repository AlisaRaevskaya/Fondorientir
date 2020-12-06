<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageCategory extends Model
{
   protected $fillable = [
       'category_name','category'];

    protected $table = 'message_categories';

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах

     public $timestamps = true;

    public function message(){
        return $this->hasMany('App\Models\Message', 'message_category_id', 'id');
    }

    public function countNotRead(){

       return $this->message->where('is_read', false)->count();
    }

}
