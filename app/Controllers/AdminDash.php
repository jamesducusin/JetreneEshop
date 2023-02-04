<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminDash extends BaseController
{
    public function index()
    {
        return redirect('Dashboard');
    }

    public function Dashboard()
    {
        return view('AdminDash/AdminDashView');
    }
}
