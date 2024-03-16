<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo'
    ];

    public function getLogoAttribute($value)
    {
        return $value ? asset(Storage::url($value)) : null;
    }

}