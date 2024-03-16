<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;



class FormController extends Controller
{


    public function index()
    {
        $form = Form::get();
        return view('admin.forms.index', compact('form'));
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Form::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function (form $row) {
                    $editUrl = route('admin.forms.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.forms.destroy', ['id' => $row->id]);
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
        return view('admin.works.index');
    }

    public function create()
    {
        return view('admin.forms.create', [
            'form' => new Form()
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
            $iconPath = $request->file('image')->store('uploads/forms', 'public');
            $data['image'] = $iconPath;
        }
        Form::create($data);
        return redirect()->route('admin.form.index')->with('message', 'works Updated successfully');
    }





    public function edit($id)
    {
        $works =  Form::findOrfail($id);
        return view('admin.works.create', compact('works'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tittle' => 'required',
            'meta' => 'required',
            'heading' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $iconPath = null;
        if ($request->hasFile('image')) {
            $iconPath = $request->file('image')->store('uploads/forms', 'public');
            $data['image'] = $iconPath;
        }
        $data['slug'] = Str::slug($request->heading);
        $tech = Form::findOrFail($id);
        $tech->update($data);
        return redirect()->route('admin.works.list')->with('message', 'Updated successfully');
    }

    public function destroy($id)
    {
        Work::findOrFail($id)->delete();
        return redirect()->route('admin.works.list')->with('message', 'Entry Deleted successfully');
    }














}
