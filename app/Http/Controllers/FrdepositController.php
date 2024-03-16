<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;





class FrdepositController extends Controller
{
    



    public function serviemenu()
    {
        $depositmenu = Deposit::latest()->get();
        return view('components.header')->with('depositmenu', $depositmenu);

    }





}
