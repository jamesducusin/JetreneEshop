<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    protected $profileModel;
    protected $session;

    public function __construct()
    {
        $this->profileModel = new \App\Models\ProfileModel();
        helper(['url', 'form', 'modal']);
        $this->session = session();
    }

    public function profile_retrieve()
    {
        $data['profile'] = $this->profileModel->where('user_id', $this->session->get('id'))->find();
        return view('UserDash/Profileview', $data);
        
    }
}
