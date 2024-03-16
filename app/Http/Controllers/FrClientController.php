<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;


class FrClientController extends Controller
{
    
    public function clients()
    {
        $data = Client::latest()->get();
        return view('clients', compact('data'));
    }



    



}
