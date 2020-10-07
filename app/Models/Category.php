<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Получить новости к категории.
     */
    public function news()
    {
        return $this->hasMany('App\Models\News');
    }
}
