<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;



class NewsController extends Controller
{
    
    public function index()
    {
        $news = News::get();
        return view('admin.news.index', compact('news'));
    }



    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = News::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function (news $row) {
                    $editUrl = route('admin.news.edit', ['id' => $row->id]);
                    $deleteUrl = route('admin.news.destroy', ['id' => $row->id]);
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
        return view('admin.news.index');
    }



    public function create()
    {
        return view('admin.news.create', [
            'news' => new News()
        ]);
    }




    public function store(Request $request)
    {
        $data = $request->validate([
            'news' => 'required',
        ]);
        News::create($data);
        return redirect()->route('admin.news.index')->with('message', 'News Updated successfully');
    }





    public function edit($id)
    {
        $news =  News::findOrfail($id);
        return view('admin.news.create', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'news' => 'required',
        ]);
        $news = News::findOrFail($id);
        $news->update($data);
        return redirect()->route('admin.news.list')->with('message', 'Updated successfully');
    }




    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return redirect()->route('admin.works.list')->with('message', 'Entry Deleted successfully');
    }








}
