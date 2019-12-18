<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $data = [
            'data pertama',
            'data kedua',
            'data ketiga',
            'data keempat',
            'data kelima'
        ];
    
        return view('welcome', ['data' =>$data]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
