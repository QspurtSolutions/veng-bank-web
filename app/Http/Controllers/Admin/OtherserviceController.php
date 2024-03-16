<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Otherservices;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;



class OtherserviceController extends Controller
{
    
    public function index(){
        $otherservices = Otherservices::get();
        return view('admin.otherservices.index', compact('otherservices'));
    }


    
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Otherservices::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.otherservices.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.otherservices.destroy', ['id' => $row->id]);
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
        return view('admin.services.index');
    }





    public function create()
    {
        return view('admin.otherservices.create', [
            'otherservices' => new Otherservices()
        ]);
    }



    

    public function store(Request $request)
    {
        $data = $request->validate([

            'heading' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
   
        $iconPath = null;
        if ($request->hasFile('image')) {
            $iconPath = $request->file('image')->store('uploads/other', 'public');
            $data['image'] = $iconPath;
        }
    
        $data['slug'] = Str::slug($request->heading);
        Otherservices::create($data);
        return redirect()->route('admin.otherservices.index')->with('message', 'Service created successfully');
        
    }




    public function edit($id)
    {
        $otherservices = Otherservices::findOrfail($id);
        return view('admin.otherservices.create', compact('otherservices'));
    }




    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $iconPath = null;
        if ($request->hasFile('image')) {
            $iconPath = $request->file('image')->store('uploads/other', 'public');
            $data['image'] = $iconPath;
        }
        $otherservices =  Otherservices::findOrFail($id);
        $otherservices->update($data);
        return redirect()->route('admin.otherservices.index')->with('message', 'Career Updated successfully');
    }





    public function destroy($id)
    {
        Otherservices::findOrFail($id)->delete();
        return redirect()->route('admin.otherservices.index')->with('success', 'Career deleted successfully');
    }














}
