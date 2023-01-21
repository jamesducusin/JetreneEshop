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
        session()->setFlashdata('shop', true);
        return view('shopview');
    }
    public function shoplist()
    {
  
        return view('ShopListView');
    }

    public function shop_category()
    {
        session()->setFlashdata('category', true);
        return view('categoryview');
    }
}
