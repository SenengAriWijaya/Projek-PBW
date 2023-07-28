<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use Config\View;
use PHPUnit\Util\Xml\Validator;

class Register extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo View('pages/register', $data);
    }

    public function save()
    {
        helper(['form']);
        $rules = [
            'nama'              => 'required|min_length[3]|max_length[50]',
            'email'             => 'required|min_length[6]|max_length[50]|valid_email|is_unique[customer.email_customer]',
            'password'          => 'required|min_length[6]|max_length[200]',
            'confpassword'      => 'matches[password]',
            'no_telp'           => 'required|min_length[11]|max_length[15]'

        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'nama_customer'     => $this->request->getVar('nama'),
                'email_customer'    => $this->request->getVar('email'),
                'password'          => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'no_telp'           => $this->request->getVar('no_telp'),
            ];
            $model->save($data);
            return redirect()->to('/pages/login');
        } else {
            $data['validation'] = $this->validator;
            echo View('pages/register', $data);
        }
    }
}
