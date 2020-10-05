<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'parent_id',
        'title',
        'url',
        'published'
    ];

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // Локальные области позволяют определять общие наборы ограничений, которые можно легко повторно
    // использовать в своем приложении. Например, вам может потребоваться часто получать всех пользователей,
    // которые считаются «популярными». Чтобы определить область действия, добавьте к методу модели Eloquent
    // префикс scope.
    // Области действия всегда должны возвращать экземпляр построителя запросов:

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

}
