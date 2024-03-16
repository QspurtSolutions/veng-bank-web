<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Industries;
use Illuminate\Support\Str;


class FrIndustriesController extends Controller
{
    

    public function industries()
    {
        $data = Industries::latest()->get();
        return view('industries', compact('data'));
    }
    public function industriesdetails($slug = null)
    {
        if ($slug) {
            $data = Industries::where('slug', $slug)->firstOrFail();
            return view('industriesdetails', compact('data'));
        }
        $data = Industries::latest()->get();
        return view('industriesdetails', compact('data'));
    }
}
