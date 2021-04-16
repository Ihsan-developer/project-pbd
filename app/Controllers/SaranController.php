<?php

namespace App\Controllers;

use App\Models\SaranModel;

class SaranController extends BaseController
{

    public function __construct()
    {

        $this->model = new SaranModel();
    }

    public function home()
    {

        return view('beranda');
    }

    public function simpanSaran()
    {

        $saran = array(
            'name' => $this->request->getVar('name'),
            'no' => $this->request->getVar('no'),
            'mail' => $this->request->getVar('mail'),
            'pesan' => $this->request->getVar('pesan')
        );


        $this->model->insert($saran);
        return redirect()->to(base_url('home'));
    }
}
