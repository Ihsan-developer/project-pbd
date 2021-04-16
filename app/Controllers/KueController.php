<?php

namespace App\Controllers;

use App\Models\KueModel;

class KueController extends BaseController
{

    public function __construct()
    {

        $this->model = new KueModel();
    }

    public function home()
    {

        return view('beranda');
    }

    public function info_kegiatan()
    {

        return view('info');
    }

    public function kue()
    {

        $kue = array(
            'kue' => $this->model->findAll(),
        );

        return view('kue', $kue);
    }

    public function tambahKue()
    {
        return view('tambah_kue');
    }

    public function simpanKue()
    {

        $kue = array(
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'jumlah' => $this->request->getVar('jumlah'),
            'harga' => $this->request->getVar('harga'),

        );

        $this->model->insert($kue);

        return redirect()->to(base_url('kue'));
    }

    public function editKue($id)
    {

        $kue = array(
            'kue' => $this->model->find($id),
        );
        return view('edit_kue', $kue);
    }

    public function updateKue($id)
    {

        $kue = array(
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'jumlah' => $this->request->getVar('jumlah'),
            'harga' => $this->request->getVar('harga'),
        );

        $this->model->update($id, $kue);

        return redirect()->to(base_url('kue'));
    }

    public function deleteKue($id)
    {

        $this->model->delete($id);
        return redirect()->to(base_url('kue'));
    }
}
