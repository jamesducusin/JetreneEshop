<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Products extends BaseController
{
    protected $session;
    protected $offerModel;
    public function __construct()
    {
        $this->offerModel = new \App\Models\OfferModel();
        helper(['url', 'form']);
        $this->session = session();
    }

    public function ProductList()
    {
        return view('AdminDash/ProductView');
    }
    public function ProductDetails()
    {
        return view('AdminDash/ProductDetailsView');
    }
    public function ProductCreate()
    {
        return view('AdminDash/ProductCreateView');
    }
    public function offerList()
    {
        $data = [
            'offers' => $this->offerModel->findAll(),
        ];
        return view('AdminDash/offersview', $data);
    }
    public function addOffer() {
        $img = $this->request->getFile('image');
        if (!$img->hasMoved()) {
            $img->move(FCPATH . 'img/offers');
            $data = [
                'offer_name' => $this->request->getPost('name'),
                'offer_desc' => $this->request->getPost('offer_desc'),
                'offer_image' => $img->getClientName(),
                'offer_percentage' => $this->request->getPost('offer_percentage'),
            ];
        }
    
        $result = $this->offerModel->insert($data);
    
        return redirect()->route('offerList');
    }
    public function updateOffer() {
        $img = $this->request->getFile('image');
        $id = $this->request->getPost('id');
        $data = [
            'offer_name' => $this->request->getPost('offer_name'),
            'offer_desc' => $this->request->getPost('offer_desc'),
            'offer_percentage' => $this->request->getPost('offer_percentage'),
        ];
        if ($_FILES['image']['name']) {
            if (!$img->hasMoved()) {
                $img->move(FCPATH . 'img/offers');
                $data['offer_image'] =  $img->getClientName();
            }
        }

        $this->offerModel->update($id, $data);
        return redirect()->route('offerList');
    }
    public function statusOfferUpdate($id, $status) {
        $this->offerModel->set('offer_status', $status)->where('id', $id)->update();
        $this->session->setFlashdata('success', 'Status has been updated succesfully');

        return redirect()->route('offerList');
    }
}
