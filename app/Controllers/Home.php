<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return redirect('home');
    }
    public function home()
    {
        session()->setFlashdata(array('home' => true, 'hometab' => true));
        return view('homeview');
    }
    public function about()
    {
        session()->setFlashdata('about', true);
        return view('aboutview');
    }
    public function contacts()
    {
        session()->setFlashdata('contact', true);
        return view('Contactview');
    }
    public function try()
    {
        return view('try');
    }
}
