<?php

namespace App\Http\Controllers;

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
      $users = ['ucup', 'budi', 'azwar'];
      return view('blog/single', ['nilai' => $nilai, 'users' => $users]);
    }
}
