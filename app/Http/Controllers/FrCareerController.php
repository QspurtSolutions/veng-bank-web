<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use Illuminate\Support\Str;

class FrCareerController extends Controller
{
    
    public function career()
    {
        $data = Career::latest()->get();
        return view('career', compact('data'));
    }

    
}
