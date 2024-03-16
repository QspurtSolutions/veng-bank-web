<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = ['heading','image'];


    public function getImageAttribute($value)
    {
        return $value ? asset(Storage::url($value)) : null;
    }




}
