<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

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

        $validation = $this->validate($this->authModel->getValidationRules(['except' => ['pass_confirm']]));

        if (!$validation) {
            return view('Homeview',  ['validation' => $this->validator]);
        } else {
            $dbUserInfo = $authModel->where('email', $email)->first();

            $user = [
                'id' => $dbUserInfo['id'],
                'email' => $email,
                'password' => $password,
                'login' => true,
            ];
            $this->session->set($user);

            return view('Homeview');
            echo "success";
        }
    }
    public function logout()
    {
        $this->session->destroy();
        return view('Homeview');
    }
    public function validateReg()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $authModel = $this->authModel;

        $validation = $this->validate($this->authModel->validationRules);

        $fields = [
            'email' => $email,
            'password' => $password,
            'usertype' => 'user',
        ];

        if (!$validation) {
            return view('Homeview',  ['validation' => $this->validator]);
        } else {
            $authModel->skipValidation(true)->insert($fields);
            return view('Homeview');
            echo "success";
        }
    }
}
