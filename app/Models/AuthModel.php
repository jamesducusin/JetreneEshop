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
    protected $validationRules      = [
        'email'        => 'required|valid_email|is_unique[users.email]',
        'password'     => 'required|min_length[8]|regex_match[/(?=[A-Za-z0-9@#$%^&+!=~\*\-_|:.]+$)^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+!=~\*\-_|:.]).*$/  ]',
        'pass_confirm' => 'required_with[password]|matches[password]',
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;


    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert    = ['beforeInsert'];
    protected $beforeUpdate   = ['beforeUpdate'];
    protected $afterFind      = ['afterFind'];

    protected function beforeInsert(array $data)
    {
        if (isset($data['data']['password']))
        $data['data']['password'] = Hash::make($data['data']['password']);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        if (isset($data['data']['password']))
            $data['data']['password'] = Hash::make($data['password']);
        return $data;
    }

    protected function afterFind(array $data)
    {
        if (isset($this->password))
            $data['data']['password'] = Hash::check($this->password, $data['data']['password']);
        return $data;
    }

    public function getPassword($password)
    {
        return $this->$password = $password;
    }
}
