<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() {
        return view('pages.home');
    }
    public function dichVu() {
        return view('pages.services');
    }
    public function dichVuCon($slug) {
        return view('pages.sub_services',compact('slug'));
    }
    public function danhMuc() {
        return view('pages.category');
    }
    public function danhMucCon($slug) {
        return view('pages.sub_category',compact('slug'));
    }
}
