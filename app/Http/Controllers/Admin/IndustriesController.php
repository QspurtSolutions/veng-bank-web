<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industries;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class IndustriesController extends Controller
{


    public function index(){
        $industries = Industries::get();
        return view('admin.industries.index', compact('industries'));
    }






    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Industries::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.industries.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.industries.destroy', ['id' => $row->id]);
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
        return view('admin.industries.index');
    }




    //Function to create Indutres


    public function create()
    {
        return view('admin.industries.create', [
            'industries' => new Industries()
        ]);
    }




    // Function to store the Industry
   public function store(Request $request)
{
    $data = $request->validate([
        'tittle' => 'required',
        'meta' => 'required',
        'heading' => 'required',
        'subdis' => 'required',
        'description' => 'required',
        'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $iconPath = null;
    if ($request->hasFile('icon')) {
        $iconPath = $request->file('icon')->store('uploads/icon', 'public');
        $data['icon'] = $iconPath;
    }

    $data['slug'] = Str::slug($request->heading);
    Industries::create($data);
    return redirect()->route('admin.industries.index')->with('message', 'Service created successfully');
}


       



    //Function edit
    public function edit($id)
    {
        $industries = Industries::findOrfail($id);
        return view('admin.industries.create', compact('industries'));
    }

    //function update
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tittle' => 'required',
            'meta' => 'required',
            'heading' => 'required',
            'subdis' => 'required',
            'description' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $iconPath = null;
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('public/icons', 'public');
            $data['icon'] = $iconPath;
        }
        $data['slug'] = Str::slug($request->heading);
        $tech = Industries::findOrFail($id);
        $tech->update($data);
        return redirect()->route('admin.industries.list')->with('message', 'Updated successfully');
    }






    public function destroy($id)
    {
        $data = Industries::find($id);
        $data->delete();
        return redirect()->route('admin.industries.list')->with('success', 'Industry deleted successfully');
    }
}