<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cart extends BaseController
{
    public function index()
    {
        //
    }

    public function cart()
    {
        return view('cartview');
    }
}
