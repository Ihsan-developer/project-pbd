<?php

namespace App\Controllers;

use App\Models\AuthModel;

class AuthController extends BaseController
{

    public function __construct()
    {
        $this->model = new AuthModel();
    }

    public function registrasi()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('auth/registrasi', $data);
    }

    public function simpanRegistrasi()
    {

        if ($this->validate($this->rulesRegistrasi())) {

            $this->model->save([
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                'role' => 'pelanggan',
            ]);

            session()->setFlashdata('registrasi_sukses', 'Registrasi berhasil');

            return redirect()->to('/login');
        } else {
            return redirect()->to('/registrasi')->withInput();
        }
    }

    public function rulesRegistrasi()
    {

        $setRules = [
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Email anda tidak valid',
                    'is_unique' => 'Email {value} sudah ada',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal {param} karakter',
                ]
            ],
            'konfirmasi_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi password harus diisi',
                    'matches' => 'Konfirmasi password berbeda dengan {param}',
                ]
            ]
        ];

        return $setRules;
    }

    public function login()
    {

        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('auth/login', $data);
    }

    public function prosesLogin()
    {

        if ($this->validate($this->rulesLogin())) {

            $query = $this->model->where('email', $this->request->getPost('email'));
            $count = $query->countAllResults(false);
            $data = $query->get()->getRow();

            if ($count > 0) {

                $hashPassword = $data->password;

                if (password_verify($this->request->getPost('password'), $hashPassword)) {

                    $session = [
                        'role' => $data->role,
                        'logged_in' => TRUE
                    ];
                    session()->set($session);

                    return redirect()->to(base_url('home'));
                } else {
                    return redirect()->to(base_url('login'))->with('login_failed', 'Username / Password anda salah');
                }
            } else {
                return redirect()->to(base_url('login'))->with('login_failed', 'Username tidak ditemukan');
            }
        } else {
            return redirect()->to(base_url('login'))->withInput();
        }
    }

    public function rulesLogin()
    {

        $setRules = [
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Email anda tidak valid',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi',
                ]
            ]
        ];

        return $setRules;
    }

    public function logout()
    {

        session()->destroy();
        return redirect()->to('/login');
    }
}
