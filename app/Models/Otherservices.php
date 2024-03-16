<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Otherservices extends Model
{
    use HasFactory;
    protected $fillable = ['heading','slug','description','image'];


    public function getImageAttribute($value)
    {
        return $value ? asset(Storage::url($value)) : null;
    }






    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'heading'
            ]
        ]; 
    }
}
