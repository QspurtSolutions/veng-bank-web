<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Work;
use Illuminate\Support\Str;

class FrWorkController extends Controller
{
    
    public function works()
    {
        $data = Work::latest()->get();
        return view('works', compact('data'));
    }

    public function worksdetails($slug = null)
    {
        if ($slug) {
            $data = Work::where('slug', $slug)->firstOrFail();
            return view('worksdetails', compact('data'));
        }
        $data = Work::latest()->get();
        return view('works', compact('data'));
    }




}
