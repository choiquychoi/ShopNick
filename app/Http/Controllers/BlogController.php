<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; 

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','DESC')->paginate(15);
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $blog = new Blog();

        $blog->title = $data['title'];
        $blog->kind_of_blog = $data['kind_of_blog'];
        $blog->slug = $data['slug'];
        $blog->description = $data['description'];
        $blog->status = $data['status'];
        $blog->content = $data['content'];

        $get_image = $request->file('image');
        if ($get_image) {
            $path = 'uploads/blogs/';
            $get_name_image = $get_image->getClientOriginalName(); // ví dụ: hinh.jpg
            $name_image = current(explode('.', $get_name_image));  // hinh
            $new_image = $name_image . rand(0, 999) . '.' . $get_image->getClientOriginalExtension(); // hinh123.jpg
            $get_image->move($path, $new_image);

            $blog->image = $new_image; // lưu tên file vào DB
        }
        $blog->save();

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $blog = Blog::find($id);
        $blog->title = $data['title'];
        $blog->kind_of_blog = $data['kind_of_blog'];
        $blog->slug = $data['slug'];
        $blog->description = $data['description'];
        $blog->status = $data['status'];
        $blog->content = $data['content'];

        $get_image = $request->image;
        if ($get_image) {
            $path = 'uploads/blogs/';
            $get_name_image = $get_image->getClientOriginalName(); // hinh.jpg
            $name_image = current(explode('.', $get_name_image)); // hinh
            $new_image = $name_image . rand(0,999) . '.' . $get_image->getClientOriginalExtension(); // hinh334.jpg
            $get_image->move($path, $new_image);
            $blog->image = $new_image;
        }

        $blog->save();
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id)->delete();
        return redirect()->back();
    }

}
