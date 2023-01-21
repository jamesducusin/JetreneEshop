<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserDash extends BaseController
{
    public function index()
    {
        //
    }
    public function orders()
    {
        return view('UserDash/OrderView');
    }

    public function wishlist()
    {
        return view('UserDash/WishView');
    }
    public function single()
    {
        return view('SingleView');
    }
    
    public function profile()
    {
        return view('UserDash/ProfileView');
    }
    public function address()
    {
        return view('UserDash/AddressView');
    }
    public function payment()
    {
        return view('UserDash/PaymentView');
    }
    public function signin()
    {
        return view('UserDash/SigninView');
    }
}
