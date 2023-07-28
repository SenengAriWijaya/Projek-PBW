<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('pages/login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email_customer', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_customer'       => $data['id_customer'],
                    'nama_customer'     => $data['nama_customer'],
                    'email_customer'    => $data['email_customer'],
                    'logged_in'         => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/index');
            } else {
                $session->setFlashdata('msg', 'Password anda salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email anda salah');
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
