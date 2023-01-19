<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Libraries\Hash;

class Auth extends BaseController
{
    protected $authModel;
    protected $session;

    public function __construct()
    {
        $this->authModel = new AuthModel();
        helper(['url', 'form']);
        $this->session = session();
    }
    public function index()
    {
        return view('Homeview');
    }

    public function authLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $authModel = $this->authModel;
        $validation = $this->validate($this->authModel->loginRules);


        if (!$validation) {
            return view('Homeview',  ['validation' => $this->validator]);
        } else {
            $dbUserInfo = $authModel->where('email', $email)->first();
            $check_password = Hash::Check($password, $dbUserInfo['password']);

            if(!$check_password){
                $this->session->setFlashdata('validation', 'Incorrect password!');
                return view('Homeview');
            }
            else{
                $user = [
                    'id' => $dbUserInfo['id'],
                    'email' => $email,
                    'password' => $password,
                    'usertype' => 'user',
                    'login' => true,
                ];
                $this->session->set($user);
                return view('Homeview');

            }


        }
    }
    public function logout()
    {
        $this->session->setFlashdata('logout', true);
        $this->session->remove('login');
        return view('Homeview');
    }
    public function validateReg()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $authModel = $this->authModel;

        $validation = $this->validate($this->authModel->registerRules);

        $fields = [
            'email' => $email,
            'password' => $password,
            'usertype' => 'user',
        ];

        if (!$validation) {
            $this->session->setFlashdata('registermodal', 'open');
            return view('Homeview',  ['validation' => $this->validator]);
        } else {
            $authModel->insert($fields);
            return view('Homeview');
            echo "success";
        }
    }

}
