<?php

namespace App\Controllers;

use App\Models\CabangModel;

class CabangController extends BaseController
{

    public function __construct()
    {

        $this->model = new CabangModel();
    }

    public function home()
    {

        return view('beranda');
    }

    public function info_kegiatan()
    {

        return view('info');
    }

    public function data_cabang()
    {

        $cabang = array(
            'cabang' => $this->model->findAll(),
        );

        return view('cabang', $cabang);
    }

    public function tambahCabang()
    {
        return view('tambah_cabang');
    }

    public function simpanCabang()
    {

        $cabang = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'lokasi' => $this->request->getVar('lokasi'),
        );

        $this->model->insert($cabang);

        return redirect()->to(base_url('data-cabang'));
    }

    public function editCabang($id)
    {

        $cabang = array(
            'cabang' => $this->model->find($id),
        );
        return view('edit_cabang', $cabang);
    }

    public function updateCabang($id)
    {

        $cabang = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'lokasi' => $this->request->getVar('lokasi'),
        );
        $this->model->update($id, $cabang);

        return redirect()->to(base_url('data-cabang'));
    }

    public function deleteCabang($id)
    {

        $this->model->delete($id);
        return redirect()->to(base_url('data-cabang'));
    }
}
