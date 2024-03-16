<?php

namespace App\Http\Controllers\Admin;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class GalleryController extends Controller
{

    public function index()
    {
        $gallery = Gallery::get();
        return view('admin.gallery.index', compact('gallery'));
    }
    

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Gallery::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function (gallery $row) {
                    $editUrl = route('admin.gallery.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.gallery.destroy', ['id' => $row->id]);
                    $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm">Edit</a> 
                <form action="' . $deleteUrl . '" method="POST" class="d-inline" id="work-form'.$row->id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <button type="button" onclick="deleteItem(`'.$row->heading.'`, '.$row->id.');" class="delete btn btn-danger btn-sm">Delete</button>
                </form>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.gallery.index');
    }



    public function create()
    {
        return view('admin.gallery.create', [
            'gallery' => new Gallery()
        ]);
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $iconPath = null;
        if ($request->hasFile('image')) {
            $iconPath = $request->file('image')->store('uploads/gallery', 'public');
            $data['image'] = $iconPath;
        }
        Gallery::create($data);
        return redirect()->route('admin.gallery.index')->with('message', 'works Updated successfully');
    }



    
    
    public function edit($id)
    {
        $gallery = Gallery::findOrfail($id);
        return view('admin.gallery.create', compact('gallery'));
    }




    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $iconPath = null;
        if ($request->hasFile('image')) {
            $iconPath = $request->file('image')->store('uploads/gallery', 'public');
            $data['image'] = $iconPath;
        }
        
        $gallery = Gallery::findOrFail($id);
        $gallery->update($data);
        return redirect()->route('admin.gallery.index')->with('message', 'Career Updated successfully');
    }





    public function destroy($id)
    {
        Gallery::findOrFail($id)->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Career deleted successfully');
    }












}
