<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class FrServiceController extends Controller
{


    public function serviemenu()
    {
        $abc = Service::latest()->get();
        return view('components.header', compact('abc'));
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