<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
    }

    public function index()
    {
        return view('auth/Login');
    }

    public function register()
    {
        return view('auth/Registrasi');
    }

    public function storeRegister()
    {
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to(base_url('auth'));
        } else {
            $data['validation'] = $this->validator;
            return view('auth/Registrasi', $data);
        }
    }

    public function storeLogin()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url());
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to(base_url('auth'));
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to(base_url('auth'));
        }
    }
}