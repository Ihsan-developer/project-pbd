<?php

namespace App\Models;

use CodeIgniter\Model;

class KueModel extends Model
{

    protected $table = 'kue';
    protected $allowedFields = ['kode', 'nama', 'jumlah', 'harga'];
}
