<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.create');
    }

    public function list()
    {
        $blogs = Blog::paginate(8);

        return view('admin.blog.list', compact('blogs'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return self::index($request)->withErrors($validator->errors());
        }

        Blog::create([
            'heading' => $request->heading,
            'body' => $request->body,
        ]);

        return redirect()->route('admin.blog.list')->with('success', 'Created successfully');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        Blog::where('id', $id)->update([
            'heading' => $request->heading,
            'body' => $request->body,
        ]);

        return redirect()->route('admin.blog.list')->with('success', 'Updated successfully');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('admin.blog.list')->with('success', 'Deleted successfully');
    }
}
