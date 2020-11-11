<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;

class News extends Model
{

/**
     * Определяем категорию которой принадлежит новость .
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function getDatelineAttribute($value)
    {
        $date = Carbon::createFromTimestamp($value)->toDateTimeString();
        return $date;
    }


    public function setDatelineAttribute($value)
    {
        $this->attributes['dateline'] = Carbon::parse($value)->timestamp;
    }

    public function getFormatDateCreate()
    {
        return $this->created_at->format('d F Y H:i');
    }

    public function getFormatDateUpdate()
    {
        return $this->updated_at->format('d F Y H:i');
    }

    public function setBodyAttribute($value)
    {
        $this->attributes['body'] = htmlspecialchars($value, ENT_HTML5);
    }

    public function getBodyAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_HTML5);
    }
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = htmlspecialchars($value, ENT_HTML5);
    }

    public function getTitleAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_HTML5);
    }
    public function setIntroAttribute($value)
    {
        $this->attributes['intro'] = htmlspecialchars($value, ENT_HTML5);
    }

    public function getIntroAttribute($val)
    {
        $val= htmlspecialchars_decode($val, ENT_HTML5);
        if (strlen($val)>200) {

            $val= Str::substr($val, 0, 70) . "...";
        }
        return $val;
    }

    public function setSource_NameAttribute($value)
    {
        $this->attributes['source_name'] = htmlspecialchars($value, ENT_HTML5);
    }
    public function getSource_NameAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_HTML5);
    }
    public function setSource_linkAttribute($value)
    {
        $this->attributes['source_link'] = htmlspecialchars($value, ENT_HTML5);
    }


    public function getImage()
    {
        if ($this->images == null) {
            return '/images/support.png';
        }

        return '/storage/articles/' . $this->images;
    }
}
