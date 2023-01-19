<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAddressModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user_address';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'contact', 'user_id', 'address_id', 'label_as', 'is_default'];


    // Validation
    protected $addressRules      = [
        'street' => 'required',
        'barangay' => 'required',
        'city' => 'required',
        'province' => 'required',
        'postalcode' => 'required', 
    ];
        
       

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function get_address($id)
    {
        return  $this->select('*, CONCAT(name, "<br>", contact) as info, CONCAT(street, ", ", barangay, ", ", city, ", ", province) AS address')
            ->join('address', 'user_address.address_id = address.id', 'right')
            ->where('user_address.user_id', $id)->get()->getResultArray();
        
    }

    public function is_uniqueInsert($data)
    {
        $addressModel = new \App\Models\AddressModel();
        $testData = [
            'street' => $data['street'],
            'barangay' => $data['barangay'],
            'city' => $data['city'],
            'province' => $data['province'],
        ];
        $addressCount = $addressModel->where($testData)->countAllResults();
        if($addressCount < 1){
            $addressModel->insert($data);
        }
        return $addressModel->where($testData)->find();
    }

    public function is_unique($data)
    {
        $uniqueAddress = [
            'user_id' => $data['user_id'],
            'address_id' => $data['address_id'],
        ];

        $duplicateCount = $this->where($uniqueAddress)->countAllResults();
        if($duplicateCount > 0) {
            return false;
        }
        else{
            return true;
        }
    }

    public function unique_default($data)
    {
        $default = [
            'is_default' => $data['is_default'],
            'user_id' => 1,
        ];

        $defaultCount = $this->where($default)->countAllResults();
        if($defaultCount > 0) {
            $this->set('is_default', '0')->where($default)->update();
            return false;
        }
        else{
            return true;
        }
    }
}
