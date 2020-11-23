<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'name','page_id','mode'
    ];
    protected $table = 'files';

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = false;

    public function page(){
        return $this->belongsTo('App\Models\Pages');
    }

    public function getFormatDateCreate()
    {
        return $this->created_at->format('d F Y H:i');
    }

    public function getFormatDateUpdate()
    {
        return $this->updated_at->format('d F Y H:i');
    }

     public function uploadImage($images)
    {
        if ($images == null) { return;}

        if($this->images !== null) {
            Storage::delete($this->images);
        }
        $fileName = $images->store('articles');
        $newName = explode('/',$fileName);
        $this->images = $newName[1];
        $this->save();
        return $newName[1];

    }
    public function uploadImagePage($images)
    {
        if ($images == null) {
            return;
        }

        if ($this->name !== null) {
            Storage::delete($this->name);
        }
        foreach ($images as $file) {
            $filename=$file->getClientOriginalName();
            $imageName = rand(0, 100).'.'. $filename;
        }
        $path= public_path('/storage/pages');
        $file->move($path, $imageName);

        $this->name = $filename;
        $this->save();
        return $filename;
    }

    public static function add($fields, $mode)
    {
        $usugi = new static;
        $usugi->fill($fields);
        $usugi->save();

        return $usugi;
    }

    public function edit($fields)
    {


        $this->fill($fields);
        $this->save($fields);

    }

}
