<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    //penggunaan SoftDeletes
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    // public $timestamp = false; //ini diset false kalau tidak pake timestamp

    protected $fillable = ['title', 'description']; //whitelist
    // protected $guarded = ['id']; //blacklist
}
