<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class PelangganController extends BaseController
{

    public function __construct()
    {

        $this->model = new PelangganModel();
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

    public function data_pelanggan()
    {

        $pelanggan = array(
            'pelanggan' => $this->model->findAll(),
        );

        return view('pelanggan', $pelanggan);
    }

    public function tambahPelanggan()
    {
        return view('tambah_pelanggan');
    }

    public function simpanPelanggan()
    {

        $pelanggan = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'kue' => $this->request->getVar('kue'),
            'jumlah' => $this->request->getVar('jumlah'),
            'cabang' => $this->request->getVar('cabang'),
            'tgl' => $this->request->getVar('tgl'),
        );

        $this->model->insert($pelanggan);

        return redirect()->to(base_url('data-pelanggan'));
    }

    public function editPelanggan($id)
    {

        $pelanggan = array(
            'pelanggan' => $this->model->find($id),
        );
        return view('edit_pelanggan', $pelanggan);
    }

    public function updatePelanggan($id)
    {

        $pelanggan = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'kue' => $this->request->getVar('kue'),
            'jumlah' => $this->request->getVar('jumlah'),
            'cabang' => $this->request->getVar('cabang'),
            'tgl' => $this->request->getVar('tgl'),

        );
        $this->model->update($id, $pelanggan);

        return redirect()->to(base_url('data-pelanggan'));
    }

    public function deletePelanggan($id)
    {

        $this->model->delete($id);
        return redirect()->to(base_url('data-pegawai'));
    }
}
