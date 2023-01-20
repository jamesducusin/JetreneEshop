<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function home()
    {
        session()->setFlashdata('home', true);
        return view('homeview');
    }
    public function about()
    {
        return view('aboutview');
    }
    public function contacts()
    {
        return view('Contactview');
    }
    public function try()
    {
        return view('try');
    }
}
