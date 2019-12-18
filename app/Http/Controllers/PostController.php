<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostController extends Controller
{
    public function show($post){
        $data = DB::table('posts')->where('slug', $post)->first();

        if($data == null){
            abort(404,'Data yang anda cari tidak ada');
        }
        return view('post')->with([
            'post' => $data
        ]);
    }
}
