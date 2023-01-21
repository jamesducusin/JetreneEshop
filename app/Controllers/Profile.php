<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

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
        $data['profile'] = $this->profileModel->profileAccount();
        return view('UserDash/Profileview', $data);
        
    }
    public function profile_insert()
    {
        $img = $this->request->getFile('avatar');
        $data = [
            'user_id' => $this->session->get('id'),
            'firstName' => $this->request->getPost('firstname'),
            'lastName' => $this->request->getPost('lastname'),
            'contact' => $this->request->getPost('contact'),
            'gender' => $this->request->getPost('gender'),
            'birthday' => $this->request->getPost('birthday'),
        ];
        $this->profileModel->insert($data);
        if(!empty($_FILES['avatar']['name'])) {
            if (!$img->hasMoved()) {
                $img->move(FCPATH . 'img/avatar');
                $this->profileModel->set('avatar', 'img/avatar/' . $img->getClientName())->where('user_id', $this->session->get('id'))->update(); 
            }
        }
        return redirect()->route('profile_retrieve');       
           
    }

    public function profile_update()
    {
        $img = $this->request->getFile('avatar');
        
        $data = [
            'firstName' => $this->request->getPost('firstname'),
            'lastName' => $this->request->getPost('lastname'),
            'contact' => $this->request->getPost('contact'),
            'gender' => $this->request->getPost('gender'),
            'birthday' => $this->request->getPost('birthday'),    
        ];
        
        if(!empty($_FILES['avatar']['name'])) {
            if (!$img->hasMoved()) {
                $img->move(FCPATH . 'img/avatar');
                $this->profileModel->set('avatar', 'img/avatar/' . $img->getClientName())->where('user_id', $this->session->get('id'))->update(); 
            }
        }
        
        $this->profileModel->set($data)->where('user_id', $this->session->get('id'))->update();
        return redirect()->route('profile_retrieve');   
    }
    public function account_update()
    {
        $accountModel = new \App\Models\AuthModel();
        $account = $accountModel->where('id', $this->session->get('id'))->first();
        $this->session->setFlashdata('account', true);

        if($account['email'] != $this->request->getPost('email')){
            $accountModel->set('email', $this->request->getPost('email'))->where('id', $this->session->get('id'))->update();
        }

        $password = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');
        $check_password = Hash::Check($password, $account['password']);
        $validation = $this->validate($accountModel->updateRules);

        if(!$check_password) {
            $this->session->setFlashdata('validation', 'incorrect password');
        }
        else{
            if(!$validation){
                $data = [
                    'profile' => $this->profileModel->profileAccount(),
                    'validation' => $this->validator
                ];
                return view('UserDash/ProfileView', $data); 
            }
            else{
                $accountModel->set('password', $this->request->getPost('new_password'))->where('id', $this->session->get('id'))->update();
            }
        }
        return redirect()->route('profile_retrieve');
        
       
    }
}
