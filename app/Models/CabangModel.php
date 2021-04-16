<?php

namespace App\Models;

use CodeIgniter\Model;

class CabangModel extends Model
{

    protected $table = 'cabang';
    protected $allowedFields = ['num', 'name', 'lokasi'];
}
