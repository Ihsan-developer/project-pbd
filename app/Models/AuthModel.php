<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model{

    protected $table = 'users';
    protected $allowedFields = ['name','email','password','role'];
}