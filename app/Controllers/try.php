<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class try extends BaseController
{
    public function index()
    {
    }

    public function shop()
    {
        return view('shopview');
    }

    public function shop_category()
    {
        return view('categoryview');
    }
}