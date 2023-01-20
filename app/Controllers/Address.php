<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AddressModel;
use App\Models\UserAddressModel;

class Address extends BaseController
{
    protected $addressModel;
    protected $userAddressModel;
    protected $session;

    public function __construct()
    {
        $this->addressModel = new AddressModel();
        $this->userAddressModel = new UserAddressModel();
        helper(['url', 'form', 'modal']);
        $this->session = session();
    }

    public function address_retrieve($address_id = null)
    {
        $id = $this->session->get('id');
        $data = [
            'address' => $this->userAddressModel->get_address($id),
        ];
        if (!isset($address_id)) {
            return view('UserDash/AddressView', $data);
        } else {
            $this->session->setFlashdata('edit', true);
            return view('UserDash/AddressView', $data);
        }
    }

    public function setDefault($id)
    {
        $data = [
            'user_id' => $this->session->get('id'),
            'address_id' => $id
        ];

        if($this->userAddressModel->makeDefault($data)) {
            return redirect()->route('address_retrieve');
        }
        
    }

    public function address_update()
    {
        $data = [
            'street' => $this->request->getPost('street'),
            'postalcode' => $this->request->getPost('postalcode'),
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'label_as' => $this->request->getPost('label_as'),
            'user_id' => $this->session->get('id'),
            'address_id' => $this->request->getPost('id'),
        ];


        if($this->userAddressModel->update_address($data)) {
            return redirect()->route('address_retrieve');
        }
        
    }
    public function address_delete()
    {
        $id = $this->request->getPost('id');
        $data = [
            'user_id' => $this->session->get('id'),
            'address_id' => $id,
        ];
        $this->userAddressModel->where($data)->delete();
        return redirect()->route('address_retrieve');
    }
    public function address_insert()
    {
        $data = [
            'barangay' => $this->request->getPost('barangay'),
            'city' => $this->request->getPost('city'),
            'province' => $this->request->getPost('province'),
        ];
        $default = $this->request->getPost('default');

        if (isset($default))
            $is_default = 1;
        else
            $is_default = 0;


        $addressInfo = $this->userAddressModel->is_uniqueInsert($data);

        $userAddress = [
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'user_id' => $this->session->get('id'),
            'address_id' => (int)$addressInfo['0']['id'],
            'street' => $this->request->getPost('street'),
            'postalcode' => $this->request->getPost('postalcode'),
            'label_as' => $this->request->getPost('label_as'),
            'is_default' => $is_default,
        ];
        if ($this->userAddressModel->is_unique($userAddress)) {
            if ($this->userAddressModel->unique_default($userAddress))
                $this->session->setFlashdata('success', 'Address was added successfuly');
            else
                $this->session->setFlashdata('success', 'Address was added successfuly and set as default address');

            $this->userAddressModel->insert($userAddress);
        } else
            $this->session->setFlashdata('failed', 'Address failed to save! Duplicate address');
        return redirect()->route('address_retrieve');
    }
}
