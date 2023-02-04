<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Customer extends BaseController
{
    public function CustomerList()
    {
        return view('AdminDash/CustomerListView');
    }
}
