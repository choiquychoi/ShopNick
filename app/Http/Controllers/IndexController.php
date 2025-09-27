<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Nick;
class IndexController extends Controller
{
    public function home() {
        $blogs_huongdan = Blog::orderBy('id','DESC')->where('kind_of_blog','huongdan')->get();
        $slider = Slider::orderBy('id','DESC')->where('status',1)->get();
        $category = Category::orderBy('id', 'DESC')->get();
        return view('pages.home',compact('category','slider','blogs_huongdan'));
    }
    public function dichVu() {
        $blogs_huongdan = Blog::orderBy('id','DESC')->where('kind_of_blog','huongdan')->get();
        $slider = Slider::orderBy('id','DESC')->where('status',1)->get();
        return view('pages.services',compact('slider','blogs_huongdan'));
    }
    public function acc($slug) {
        $category = Category::where('slug',$slug)->first();
        $nicks = Nick::where('category_id',$category->id)->where('status',1)->paginate(16);
        $blogs_huongdan = Blog::orderBy('id','DESC')->where('kind_of_blog','huongdan')->get();
        $slider = Slider::orderBy('id','DESC')->where('status',1)->get();
        return view('pages.acc',compact('slug','slider','blogs_huongdan','nicks','category'));
    }
    public function danhMuc_game($slug) {
        $blogs_huongdan = Blog::orderBy('id','DESC')->where('kind_of_blog','huongdan')->get();
        $slider = Slider::orderBy('id','DESC')->where('status',1)->get();
        $category = Category::where('slug',$slug)->first();
        return view('pages.category',compact('slider','blogs_huongdan','category'));
    }
    public function danhMucCon($slug) {
        $blogs_huongdan = Blog::orderBy('id','DESC')->where('kind_of_blog','huongdan')->get();
        $slider = Slider::orderBy('id','DESC')->where('status',1)->get();
        return view('pages.sub_category',compact('slug','slider','blogs_huongdan'));
    }
    public function blogs(){
        $blogs = Blog::orderBy('id','DESC')->where('kind_of_blog','Blogs')->paginate(30);
        $blogs_huongdan = Blog::orderBy('id','DESC')->where('kind_of_blog','huongdan')->get();
        $slider = Slider::orderBy('id','DESC')->where('status',1)->get();
        return view('pages.blogs',compact('slider','blogs','blogs_huongdan'));
    }
    public function blogs_detail($slug){
        $blogs_huongdan = Blog::orderBy('id','DESC')->where('kind_of_blog','huongdan')->get();
        $blogs = Blog::where('slug',$slug)->first();
        $slider = Slider::orderBy('id','DESC')->where('status',1)->get();
        return view('pages.blog_detail',compact('slider','blogs','blogs_huongdan'));
    }
}
