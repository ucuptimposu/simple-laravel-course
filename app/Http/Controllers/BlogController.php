<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      return view('blog/home');
    }

    public function show($id)
    {
      $nilai = "Nilai parameternya = ". $id;
      $user = "ucup";

      DB::table('users')->insert(
        ['username' => 'azka', 'password' => 'zaky']
      );

      $users = DB::table('users')->get();
      //dd($users); ->untuk melihat isi datanya

      $unescape = '<script> alert("x") </script>';
      return view('blog/single', ['nilai' => $nilai, 'users' => $users, 'unescape' => $unescape]);
    }
}
