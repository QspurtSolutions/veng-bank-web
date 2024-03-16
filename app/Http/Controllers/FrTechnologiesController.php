<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technologies;
use Illuminate\Support\Str;


class FrTechnologiesController extends Controller
{
   
    public function technologies()
    {
        $technologies = Technologies::latest()->get();
        return view('technologies', compact('technologies'));
    }

    public function technologiesdetails($slug = null)
    {
        if ($slug) {
            $data = Technologies::where('slug', $slug)->firstOrFail();
            return view('technologiesdetails', compact('data'));
        }
        $data = Technologies::latest()->get();
        return view('technologiesdetails', compact('data'));
    }



}
