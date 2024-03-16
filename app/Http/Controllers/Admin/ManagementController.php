<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Management;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ManagementController extends Controller
{
    
    public function index(){
        $management = Management::get();
        return view('admin.management.index', compact('management'));
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data =  Management::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.management.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.management.destroy', ['id' => $row->id]);
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
        return view('admin.management.index');
    }

    public function create()
    {
        return view('admin.management.create', [
            'management' => new Management()
        ]);
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'designation' => 'required',
        'phone' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $iconPath = null;
    if ($request->hasFile('image')) {
        $iconPath = $request->file('image')->store('uploads/management', 'public');
        $data['image'] = $iconPath;
    }

    Management::create($data);
    return redirect()->route('admin.management.index')->with('message', 'Service created successfully');
}





    public function edit($id)
    {
        $management = Management::findOrfail($id);
        return view('admin.management.create', compact('management'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $management =  Management::findOrFail($id);
        $management->update($data);
        return redirect()->route('admin.management.index')->with('message', 'Career Updated successfully');
    }

    public function destroy($id)
    {
        Management::findOrFail($id)->delete();
        return redirect()->route('admin.Management.index')->with('success', 'Career deleted successfully');
    }
}