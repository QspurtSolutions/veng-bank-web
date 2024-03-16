<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Industries extends Model
{
    use HasFactory;
    protected $fillable = ['tittle','meta','heading','slug', 'subdis', 'description','icon'];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'heading'
            ]
        ];
    }

    
    public function getIconAttribute($value)
    {
        return $value ? asset(Storage::url($value)) : null;
    }

    
}
