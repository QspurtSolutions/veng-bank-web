<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    public $fillable = [
        'tittle','meta','heading','slug','tag','date','created','description','image'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'heading'
            ]
        ];
    }


    public function getImageAttribute($value)
    {
        return $value ? asset(Storage::url($value)) : null;
    }



}
