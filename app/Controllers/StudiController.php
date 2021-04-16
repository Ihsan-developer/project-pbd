<?php

namespace App\Controllers;

use App\Models\StudiModel;

class StudiController extends BaseController
{
    public function __construct()
    {

        $this->model = new StudiModel();
    }

    public function studi()
    {

        $studi = array(
            'pelanggan' => $this->model->findAll(),
        );

        return view('studi', $studi);


        $this->db->select("(SELECT * FROM pelanggan WHERE kode LIKE 'JAN%')", TRUE);
        $query = $this->db->get('pelanggan')->row();
        echo $query->pelanggan;
    }
}
