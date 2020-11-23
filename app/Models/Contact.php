<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name','eng_name','inn', 'index', 'city', 'street','station', 'bus','routes','metro','email', 'phone','email','web',
        'logo'
    ];
    protected $table = 'contacts';

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = false;
}
