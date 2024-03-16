<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $servicemenu = Service::latest()->get();
        echo'<pre>';print_r($servicemenu);  exit;
        return view ('home', compact('servicemenu'));
    }
}


