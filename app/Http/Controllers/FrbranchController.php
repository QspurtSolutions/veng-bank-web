<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use Illuminate\Http\Request;

class FrbranchController extends Controller
{

    public function branch()
    {
        $branch = Branch::latest()->get();
        return view('branch', compact('branch'));
    }






}
