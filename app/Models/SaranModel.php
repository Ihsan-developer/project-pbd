<?php

namespace App\Models;

use CodeIgniter\Model;

class SaranModel extends Model
{

    protected $table = 'saran';
    protected $allowedFields = ['name', 'no', 'mail', 'pesan'];
}
