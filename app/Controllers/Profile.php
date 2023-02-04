<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

class Profile extends BaseController
{
    protected $profileModel;
    protected $accountModel;
    protected $session;

    public function __construct()
    {
        $this->profileModel = new \App\Models\ProfileModel();
        $this->accountModel = new \App\Models\AuthModel();
        helper(['url', 'form', 'modal']);
        $this->session = session();
        $this->session->setFlashdata('profiletab', true);
    }

    public function profile_retrieve()
    {
        $data = [
            'profile' => $this->profileModel->profileAccount(),
        ];
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
        if ($this->profileModel->insert($data)) {
            if (!empty($_FILES['avatar']['name'])) {
                if (!$img->hasMoved()) {
                    $img->move(FCPATH . 'img/avatar');
                    $this->profileModel->set('avatar', 'img/avatar/' . $img->getClientName())->where('user_id', $this->session->get('id'))->update();
                }
            }
            $this->session->setFlashdata('success', 'Profile has been saved.');
        } else {
            $this->session->setFlashdata('failed', 'Profile failed to save.');
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

        if (!empty($_FILES['avatar']['name'])) {
            if (!$img->hasMoved()) {
                $img->move(FCPATH . 'img/avatar');
                $this->profileModel->set('avatar', 'img/avatar/' . $img->getClientName())->where('user_id', $this->session->get('id'))->update();
            }
        }

        if ($this->profileModel->set($data)->where('user_id', $this->session->get('id'))->update()) {
            $this->session->setFlashdata('success', 'Profile has been updated.');
        } else {
            $this->session->setFlashdata('failed', 'Profile failed to update.');
        }
        return redirect()->route('profile_retrieve');
    }

    public function account_update()
    {
        $account = $this->accountModel->where('id', $this->session->get('id'))->first();
        $this->session->setFlashdata('account', true);
        $newPassword = $this->request->getPost('new_password');
        $email = $this->request->getPost('email');

        if ($account['email'] != $email && !empty($email) && !empty($newPassword)) {
            $validation = $this->validate($this->accountModel->updateRules);
            if (!$validation) {
                $data = [
                    'profile' => $this->profileModel->profileAccount(),
                    'validation' => $this->validator,
                ];
                $this->session->setFlashdata('failed', 'Account email and password failed to update.');     
                return view('UserDash/ProfileView', $data);
            } 
            $this->session->setFlashdata('success', 'Account has been updated.');
            $this->accountModel->set('email', $email)->set('password', $newPassword)->where('id', $this->session->get('id'))->update(); 
          
        }
        elseif($account['email'] == $email  && !empty($email) && !empty($newPassword)){
            $validation = $this->validate($this->accountModel->passwordRules);
            if (!$validation) {
                $data = [
                    'profile' => $this->profileModel->profileAccount(),
                    'validation' => $this->validator,
                ];
                $this->session->setFlashdata('failed', 'Account Password failed to update.');
                return view('UserDash/ProfileView', $data);
            } 
            $this->session->setFlashdata('success', 'Account password has been updated.');
            $this->accountModel->set('password', $newPassword)->where('id', $this->session->get('id'))->update();  
       
        }
        elseif(!empty($email) && empty($newPassword)){
            $validation = $this->validate($this->accountModel->emailRules);
            if (!$validation) {
                $data = [
                    'profile' => $this->profileModel->profileAccount(),
                    'validation' => $this->validator,
                ];
                $this->session->setFlashdata('failed', 'Account email failed to update.');
                return view('UserDash/ProfileView', $data);
            } 
            $this->session->setFlashdata('success', 'Account email has been updated.');
            $update = $this->accountModel->set('email', $email)->where('id', $this->session->get('id'))->update();  
            
        }
        else{
            $this->session->setFlashdata('failed', 'There is no changes to apply.');
            return redirect()->route('profile_retrieve');
        }

        return redirect()->route('logout');
        
    }

}
