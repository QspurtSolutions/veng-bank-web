<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Career;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;



class UserBlogController extends Controller
{

    
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::latest()->get();
            return Datatables::of($data)
            ->addColumn('action', function ($row) {
                $editUrl = route('admin.blog.edit', ['id' => $row->id]);
                $deleteUrl = route('admin.blog.destroy', ['id' => $row->id]);
                $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm">Edit</a> 
            <form action="' . $deleteUrl . '" method="POST" class="d-inline">
                ' . csrf_field() . '
                ' . method_field('DELETE') . '
                <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
            </form>';
                return $actionBtn;
            })
            ->editColumn('description', function ($row) {
                return htmlentities($row->description) ; 
            })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('user.blog.index');
    }

    public function create()
    {
        return view('user.blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'heading' => 'required',
            'tag' => 'required',
            'date' => 'required',
            'created' => 'required',	    
            'description' => 'required',
            'image' => 'required|file', 
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/blog');
            $data['image'] = $imagePath;
        }
    
        $data['slug'] = Str::slug($request->heading); 
    
        try {
            Blog::create($data);
            return redirect()->route('admin.user.list')->with('success', 'Blog post created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
    public function edit($id)
    {
        $blog = Blog::findOrfail($id);
        return view('admin.user.create', compact('blog'));
    }

    public function update(Request $request)
{
    $data = $request->validate([
        'heading' => 'required',
        'tag' => 'required',
        'date' => 'required',
        'created'=> 'required',	    
        'description'=>'required',
    ]);

    $id = $request->input('id');
    $blog = Blog::find($id);
    $blog->heading = $request->input('heading');
    $blog->slug = Str::slug($request->input('heading')); 
    $blog->tag = $request->input('tag');
    $blog->save();
    return redirect()->route('admin.user.list')->with('message', 'Updated successfully');
}

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('admin.user.list')->with('success', 'User deleted successfully');
    }
}
