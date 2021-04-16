<?php

namespace App\Models;

use CodeIgniter\Model;

class StudiModel extends Model
{

    protected $table = 'pelanggan';
    protected $allowedFields = ['num', 'name', 'kue', 'jumlah', 'cabang', 'tgl'];
}

class PelangganModel extends Model
{

    protected $table = 'pelanggan';
    protected $allowedFields = ['num', 'name', 'kue', 'jumlah', 'cabang', 'tgl'];
}

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected $allowedFields = ['num', 'name', 'lokasi', 'gaji'];
}

class ManagerModel extends Model
{

    protected $table = 'manager';
    protected $allowedFields = ['num', 'name', 'lokasi', 'gaji'];
}

class KueModel extends Model
{

    protected $table = 'kue';
    protected $allowedFields = ['kode', 'nama', 'jumlah', 'harga'];
}
