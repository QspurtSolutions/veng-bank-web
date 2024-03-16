<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;





use App\Models\Branch;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;



class BranchController extends Controller
{
    

    public function index(){
        $branch = Branch::get();
        return view('admin.branch.index', compact('branch'));
    }


    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Branch::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.branch.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.branch.destroy', ['id' => $row->id]);
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
        return view('admin.branch.index');
    }





    public function create()
    {
        return view('admin.branch.create', [
            'branch' => new Branch()
        ]);
    }
	 	

    public function store(Request $request)
    {
        $data = $request->validate([
            'branch' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'estd' => 'required',
        ]);
        Branch::create($data);
        return redirect()->route('admin.branch.index')->with('message', 'Service created successfully');
        
    }




    public function edit($id)
    {
        $branch = Branch::findOrfail($id);
        return view('admin.branch.create', compact('branch'));
    }




    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'branch' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'estd' => 'required',
        ]);
        $branch =  Branch::findOrFail($id);
        $branch->update($data);
        return redirect()->route('admin.branch.index')->with('message', 'Career Updated successfully');
    }





    public function destroy($id)
    {
        Branch::findOrFail($id)->delete();
        return redirect()->route('admin.branch.index')->with('success', 'Career deleted successfully');
    }









}
