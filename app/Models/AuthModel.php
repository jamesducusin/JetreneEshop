<?php

namespace App\Models;
use App\Libraries\Hash;
use CodeIgniter\Model;

class AuthModel extends Model
{
    //my variable
    protected $password;


    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email', 'password', 'usertype'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'date';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $registerRules      = [
        'email' =>[
            'rules'=>'required|valid_email|is_unique[users.email]',
            'errors'=>['is_not_unique'=>'This email is not registered in our service.']], 
        'password' => [
            'rules' => 'required|min_length[8]|regex_match[/(?=[A-Za-z0-9@#$%^&+!=~\*\-_|:.]+$)^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+!=~\*\-_|:.]).*$/  ]',
            'errors' =>['regex_match' => 'Passwords too weak, must have atleast<br>✓ 1 uppercase <br>✓ 1 lowercase <br>✓ 1 special character <br>✓ alphanumeric.']],
        'pass_confirm' => [
            'rules' =>'required|matches[password]',
            'errors' =>['matches' => 'The password confirmation field does not match the password field.']]];
    protected $updateRules = [
        'new_password' => [
            'rules' => 'required|min_length[8]|regex_match[/(?=[A-Za-z0-9@#$%^&+!=~\*\-_|:.]+$)^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+!=~\*\-_|:.]).*$/  ]',
            'errors' =>['regex_match' => 'Passwords too weak, must have atleast<br>✓ 1 uppercase <br>✓ 1 lowercase <br>✓ 1 special character <br>✓ alphanumeric.']],
        'confirm_password' => [
            'rules' =>'required|matches[new_password]',
            'errors' =>['matches' => 'The password confirmation field does not match the password field.']]
        ];

    protected $loginRules      = [           
    'email' =>[
        'rules'=>'required|valid_email|is_not_unique[users.email]',
        'errors'=>['is_not_unique'=>'This email is not registered in our service.']],
    'password'=> 'required|min_length[8]'];

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert    = ['hashPassword'];
    protected $beforeUpdate   = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) {
            return $data;
        }
        $data['data']['password'] = Hash::make($data['data']['password']);
        return $data;
    }
}
