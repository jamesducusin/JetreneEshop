<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Checkout extends BaseController
{
    public function index()
    {
        //
    }
    public function tracking()
    {
        return view('TrackingView');
    }
}
