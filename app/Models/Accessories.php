<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'accessories';
    protected $filltable = [
        'title', 'status'
    ];

    public function category(){
        return $this->BelongsTo(Category::class);
    }
}
