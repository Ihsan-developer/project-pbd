<?php

namespace App\Models;

use CodeIgniter\Model;

class ManagerModel extends Model
{

    protected $table = 'manager';
    protected $allowedFields = ['num', 'name', 'lokasi', 'gaji'];
}
