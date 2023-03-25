<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /*blog*/
    public function addBlog()
    {
        return view('backend.blog.add-blog');
    }

    public function manageBlog()
    {
        $blogs = Blog::with('user')->orderBy('id', 'desc')->get();
        return view('backend.blog.manage-blog', compact('blogs'));
    }

    /*blog save*/
    public function store(Request $request)
    {
        /*validation*/
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'photo' => 'required | image',
            'status' => 'required',
            'description' => 'required | string',
        ]);
        /*save*/
        $file = $request->file('photo');
        $file_name = uniqid() . date('dmyhis.') . $file->getClientOriginalExtension();
        $blog = Blog::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'date' => $request->date,
            'photo' => $file_name,
            'status' => $request->status,
            'description' => trim($request->description),
        ]);
        if ($blog) {
            $file->move('uploads/blog', $file_name);
        }
        return redirect()->back()->with(['type' => 'success', 'message' => 'Created Done.']);
    }

    /*blog delete*/
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $originalPath = getcwd() . "/uploads/blog/{$blog->photo}";
        if (File::exists($originalPath)) {
            File::delete($originalPath);
        }
        $blog->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Delete Success']);
    }

    /*edit blog*/
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->user_id = Auth::user()->id;
        $blog->title = $request->title;
        $blog->date = $request->date;

        $old_photo = $blog->photo;
        $file = $request->file('photo');
        if ($file == null) {
            $blog->photo = $old_photo;
        } else {
            if ($file) {
                $file_name = uniqid() . date('dmyhis.') . $file->getClientOriginalExtension();
                $blog->photo = $file_name;
                $file->move('uploads/blog', $file_name);
                File::delete(public_path('/uploads/blog/' . $old_photo));
            }
        }
        $blog->status = $request->status;
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('blog.manageBlog')->with(['type' => 'success', 'message' => 'Update Done.']);
    }

    /*status update*/
    public function blogStatus($id)
    {
        $status = Blog::findOrFail($id);
        if ($status->status == 'active') {
            $status->status = 'inactive';
            $status->save();
        } else {

            $status->status = 'active';
            $status->save();
        }
        return redirect()->back()->with(['type' => 'success', 'message' => 'Status Update.']);
    }
    /*show*/
    public function show($id)
    {
        $blog = Blog::with('user')->findOrFail($id);

        if($blog)
            return view('backend.blog.show',compact('blog'));
        else
            return redirect()->back();
    }
    /*blog*/
}
