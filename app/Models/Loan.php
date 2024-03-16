<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = ['heading','slug','description'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'heading'
            ]
        ]; 
    }



}
