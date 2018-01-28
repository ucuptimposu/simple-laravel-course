<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // public $timestamp = false; //ini diset false kalau tidak pake timestamp

    protected $fillable = ['title', 'description']; //whitelist
    // protected $guarded = ['id']; //blacklist
}
