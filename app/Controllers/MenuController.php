<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class MenuController extends BaseController
{

    public function __construct()
    {

        $this->model = new PegawaiModel();
    }

    public function home()
    {

        return view('beranda');
    }

    public function menu()
    {

        return view('menu');
    }

    public function info_kegiatan()
    {

        return view('info');
    }

    public function data_pegawai()
    {

        $pegawai = array(
            'pegawai' => $this->model->findAll(),
        );

        return view('pegawai', $pegawai);
    }

    public function tambahPegawai()
    {
        return view('tambah_pegawai');
    }

    public function simpanPegawai()
    {

        $pegawai = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'lokasi' => $this->request->getVar('lokasi'),
            'gaji' => $this->request->getVar('gaji'),

        );

        $this->model->insert($pegawai);

        return redirect()->to(base_url('data-pegawai'));
    }

    public function editPegawai($id)
    {

        $pegawai = array(
            'pegawai' => $this->model->find($id),
        );
        return view('edit_pegawai', $pegawai);
    }

    public function updatePegawai($id)
    {

        $pegawai = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'lokasi' => $this->request->getVar('lokasi'),
            'gaji' => $this->request->getVar('gaji'),

        );
        $this->model->update($id, $pegawai);

        return redirect()->to(base_url('data-pegawai'));
    }

    public function deletePegawai($id)
    {

        $this->model->delete($id);
        return redirect()->to(base_url('data-pegawai'));
    }
}
