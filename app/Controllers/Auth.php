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
        $this->session->setFlashdata('home', true);
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
                    'usertype' => $dbUserInfo['usertype'],
                    'login' => true,
                ];
                $this->session->set($user);
                return view('Homeview');
            }
        }
    }
    public function logout()
    {
        $this->session->remove('login');
        $this->session->destroy();
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
            $this->session->setFlashdata('validatereg', '1');
            return view('Homeview',  ['validation' => $this->validator]);
        } else {
            $authModel->insert($fields);
            return redirect()->route('home');
        }
    }

}
