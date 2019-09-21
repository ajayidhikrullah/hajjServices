<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('partials.home.index');
    }

    public function contact()
    {
        return view ('partials.contact.index');   
    }


}
