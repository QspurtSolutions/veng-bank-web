<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Gallery;



class frGalleryController extends Controller
{
    

    public function gallery()
    {
        $gallery = Gallery::latest()->get();
        return view('gallery', compact('gallery'));
    }




}
