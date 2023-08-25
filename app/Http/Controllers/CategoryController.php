<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        return view('category', [
            "title" => "All Category",
            "posts" => Category::latest()->get(),
        ]);
    }
}
