<?php

namespace App\Controllers;

use App\Models\ManagerModel;

class ManagerController extends BaseController
{

    public function __construct()
    {

        $this->model = new ManagerModel();
    }

    public function home()
    {

        return view('beranda');
    }

    public function info_kegiatan()
    {

        return view('info');
    }

    public function data_manager()
    {

        $manager = array(
            'manager' => $this->model->findAll(),
        );

        return view('manager', $manager);
    }

    public function tambahManager()
    {
        return view('tambah_manager');
    }

    public function simpanManager()
    {

        $manager = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'lokasi' => $this->request->getVar('lokasi'),
            'gaji' => $this->request->getVar('gaji'),

        );

        $this->model->insert($manager);

        return redirect()->to(base_url('data-manager'));
    }

    public function editManager($id)
    {

        $manager = array(
            'manager' => $this->model->find($id),
        );
        return view('edit_manager', $manager);
    }

    public function updateManager($id)
    {

        $manager = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'lokasi' => $this->request->getVar('lokasi'),
            'gaji' => $this->request->getVar('gaji'),

        );
        $this->model->update($id, $manager);

        return redirect()->to(base_url('data-manager'));
    }

    public function deleteManager($id)
    {

        $this->model->delete($id);
        return redirect()->to(base_url('data-manager'));
    }
}
