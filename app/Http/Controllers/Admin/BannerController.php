<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;



class BannerController extends Controller
{
    


    public function index()
    {
        $banner = Banner::get();
        return view('admin.banner.index', compact('banner'));
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Banner::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function (Banner $row) {
                    $editUrl = route('admin.banner.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.banner.destroy', ['id' => $row->id]);
                    $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm">Edit</a> 
                <Banner action="' . $deleteUrl . '" method="POST" class="d-inline" id="work-Banner'.$row->id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <button type="button" onclick="deleteItem(`'.$row->heading.'`, '.$row->id.');" class="delete btn btn-danger btn-sm">Delete</button>
                </Banner>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.banner.index');
    }

    public function create()
    {
        return view('admin.Banner.create', [
            'banner' => new Banner()
        ]);
    }




    public function store(Request $request)
    {
        $data = $request->validate([
            'heading' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $iconPath = null;
        if ($request->hasFile('image')) {
            $iconPath = $request->file('image')->store('uploads/banner', 'public');
            $data['image'] = $iconPath;
        }
        Banner::create($data);
        return redirect()->route('admin.banner.index')->with('message', 'banner Updated successfully');
    }





    public function edit($id)
    {
        $banner =  Banner::findOrfail($id);
        return view('admin.banner.create', compact('banner'));
    }




    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'heading' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $iconPath = null;
        if ($request->hasFile('image')) {
            $iconPath = $request->file('image')->store('uploads/works', 'public');
            $data['image'] = $iconPath;
        }
        $data['slug'] = Str::slug($request->heading);
        $banner = Banner::findOrFail($id);
        $banner->update($data);
        return redirect()->route('admin.banner.list')->with('message', 'Updated successfully');
    }



    public function destroy($id)
    {
        Banner::findOrFail($id)->delete();
        return redirect()->route('admin.banner.list')->with('message', 'Entry Deleted successfully');
    }





}
