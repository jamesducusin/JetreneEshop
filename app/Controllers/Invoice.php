<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Invoice extends BaseController
{
    public function InvoiceList()
    {
        return view('AdminDash/InvoiceListView');
    }
    public function InvoiceDetails()
    {
        return view('AdminDash/InvoiceDetailsView');
    }
    public function InvoiceCreate()
    {
        return view('AdminDash/InvoiceCreateView');
    }
}
