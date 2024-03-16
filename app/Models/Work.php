<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle','meta','heading','slug', 'description','image','categories','fb', 'insta', 'twi', 'web'
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
