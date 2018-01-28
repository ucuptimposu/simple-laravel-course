<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    public function index()
    {

      $blogs = Blog::all();
      //dd($blogs);

      return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id)
    {

      $blog = Blog::find($id);
      // dd($blog);
      return view('blog/single', ['blog' => $blog]);
    }
}
