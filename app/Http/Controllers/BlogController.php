<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {

      //insert biasa
      // $blog = new Blog();
      // $blog->title = 'Halo Cimahi';
      // $blog->description = 'Halo halo halo Cimahi';
      // $blog->save();

      //insert mas assignmer
      // Blog::create([
      //   'title' => 'Halo Pengawu',
      //   'description' => 'Halo-halo pengawu',
      //   'created_at' => '2017-01-01 05:57:33',
      //   'updated_at' => '2017-01-28 05:57:33'
      // ]);

      // update
      // $blog = Blog::where('title', 'Halo Pengawu')->first();
      // $blog->title = 'Halo Palupi';
      // $blog->save();

      //update mas assignmer
      // Blog::find(12)->update([
      //   'title' => 'Halo Tinggede',
      //   'description' => 'Halo - halo tinggede'
      // ]);

      //delete
      // $blog = Blog::find(13);
      // $blog->delete();
      //atau delete ke 2
      //Blog::destroy([14, 15, 16, 17, 18]);

      //softdelete -> fungsinya dia tidak langsung menghapus datanya disimpan di trash gitu deh
      // tapi harus aktifkan delete_at column database dan dihubungkan ke model
      // Blog::find(1)->delete();

      //liat semua data
      //$blogs = Blog::withTrashed()->get();
      //liat hanya yg sudah dihapus
      // $blogs = Blog::onlyTrashed()->get();

      //restore
      //Blog::withTrashed()->restore(); //atau tambahkan find(x) untuk lebih spesifik

      $blogs = Blog::all();
      //dd($blogs);
      return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id)
    {

      $blog = Blog::find($id);
      if (!$blog) {
         abort(404);
      }
      return view('blog/single', ['blog' => $blog]);
    }

    public function edit($id)
    {
      $blog = Blog::find($id);
      if (!$blog) {
        abort(404);
      }

      return view('blog/edit', ['blog' => $blog]);
    }

    public function update(Request $req, $id)
    {
      Blog::find($id)->update([
        'title' => $req->title,
        'description' => $req->description
      ]);

      return redirect('blog');
    }

    public function create()
    {
      return view('blog/create');
    }

    public function store(Request $req)
    {
      Blog::create([
        'title' => $req->title,
        'description' => $req->description
      ]);

      return redirect('blog');
    }

    public function delete($id)
    {
      $blog = Blog::find($id)->delete();
      return redirect('blog');
    }
}
