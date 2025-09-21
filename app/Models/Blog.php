<?php

namespace App\Models;
use App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'blogs';
    protected $filltable = [
        'title', 'description', 'image', 'status', 'content'
    ];
}
