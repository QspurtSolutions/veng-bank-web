<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\blog;
use Illuminate\Support\Str;

class FrBlogController extends Controller
{
    public function blog()
    {
        $data = blog::latest()->get();
        return view('blog', compact('data'));
    }



    public function blogdetails($slug = null)
    {
        if ($slug) {
            $blogdata = blog::where('slug', $slug)->firstOrFail();
            return view('blogdetails', compact('blogdata'));
        }
        $data = blog::latest()->get();
        return view('blogdetails', compact('data'));
    }

}