<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{

    protected $table = 'pelanggan';
    protected $allowedFields = ['num', 'name', 'kue', 'jumlah', 'cabang', 'tgl'];
}
