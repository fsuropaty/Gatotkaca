<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        return view('beranda');
    }

    public function hoax()
    {
        return view('hoax');
    }

    public function personal()
    {
        return view('personal');
    }
}