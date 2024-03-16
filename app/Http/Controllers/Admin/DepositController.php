<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;


use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;


class DepositController extends Controller
{
    


    public function index(){
        $deposit = Deposit::get();
        return view('admin.deposit.index', compact('deposit'));
    }


    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data =  Deposit::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.deposit.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.deposit.destroy', ['id' => $row->id]);
                    $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm">Edit</a> 
            <form action="' . $deleteUrl . '" method="POST" class="d-inline">
                ' . csrf_field() . '
                ' . method_field('DELETE') . '
                <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
            </form>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.deposit.index');
    }


        
    public function create()
    {
        return view('admin.loan.create', [
            'loan' => new Deposit()
        ]);
    }




    public function store(Request $request)
    {
        $data = $request->validate([

            'heading' => 'required',
            'description' => 'required',
            
        ]);
   
        $data['slug'] = Str::slug($request->heading);
        Deposit::create($data);
        return redirect()->route('admin.deposit.index')->with('message', 'Service created successfully');
        
    }



    
    public function edit($id)
    {
        $deposit = Deposit::findOrfail($id);
        return view('admin.deposit.create', compact('deposit'));
    }




    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);
        
        $deposit = Deposit::findOrFail($id);
        $deposit->update($data);
        return redirect()->route('admin.deposit.index')->with('message', 'Career Updated successfully');
    }





    public function destroy($id)
    {
        Deposit::findOrFail($id)->delete();
        return redirect()->route('admin.deposit.index')->with('success', 'Career deleted successfully');
    }



















}
