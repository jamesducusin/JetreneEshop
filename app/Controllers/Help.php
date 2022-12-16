<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Help extends BaseController
{
    public function index()
    {
        //
    }

    public function helpcenter()
    {
        return view('HelpView');
    }
    public function helpsingle()
    {
        return view('HelpSingleView');
    }
}
