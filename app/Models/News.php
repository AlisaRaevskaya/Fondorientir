<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

/**
     * Определяем категорию которой принадлежит новость .
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function getDateAttribute()
    {
        $date = Carbon::createFromTimestamp($this->dateline)->format('m/d/Y');

        return $date;
    }


}
