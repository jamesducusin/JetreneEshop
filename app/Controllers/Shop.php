<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        
    }

    public function shop()
    {
        return view('shopview');
    }
}
