<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'text','read_id','category_id'];

    protected $table = 'notifications';

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах

     public $timestamps = true;
/**
     * Определяем категорию которой принадлежит новость .
     */
    public function category(){
    return $this->belongsTo('App\Models\NotificationCategory');
    }

// public function commentsCount()
// {
//   return $this->hasOne('Comment')
//     ->selectRaw('is_read, count(*) as aggregate')
//     ->groupBy('is_read');
// }


}
