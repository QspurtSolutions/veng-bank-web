<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Management;


class FrmanagementController extends Controller
{
    

    public function management()
    {
        $management = Management::latest()->get();
        return view('management', compact('management'));
    }





    public function service()
    {
        $service = Service::latest()->get();
        return view('service', compact('service'));
    }

    public function servicedetails($slug = null)
    {
        if ($slug) {
            $data = Service::where('slug', $slug)->firstOrFail();
            return view('servicedetails', compact('data'));
        }
        $data = Service::latest()->get();
        return view('service', compact('data'));
    }













}
