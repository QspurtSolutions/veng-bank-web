<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;




class LoanController extends Controller
{
    
    public function index(){
        $loan = Loan::get();
        return view('admin.loan.index', compact('loan'));
    }



    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Loan::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.loan.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.loan.destroy', ['id' => $row->id]);
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
        return view('admin.loan.index');
    }






        
    public function create()
    {
        return view('admin.loan.create', [
            'loan' => new Loan()
        ]);
    }




    public function store(Request $request)
    {
        $data = $request->validate([

            'heading' => 'required',
            'description' => 'required',
            
        ]);
   
        $data['slug'] = Str::slug($request->heading);
        loan::create($data);
        return redirect()->route('admin.loan.index')->with('message', 'Service created successfully');
        
    }




    
    public function edit($id)
    {
        $loan = Loan::findOrfail($id);
        return view('admin.loan.create', compact('loan'));
    }




    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);
        
        $loan =  Loan::findOrFail($id);
        $loan->update($data);
        return redirect()->route('admin.loan.index')->with('message', 'Career Updated successfully');
    }





    public function destroy($id)
    {
        Loan::findOrFail($id)->delete();
        return redirect()->route('admin.loan.index')->with('success', 'Career deleted successfully');
    }











}
