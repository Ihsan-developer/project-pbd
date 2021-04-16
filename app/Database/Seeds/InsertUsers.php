<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertUsers extends Seeder
{
	public function run()
	{
		$data = [
			'name' => 'manager',
			'email' => 'manager@gmail.com',
			'password' => password_hash('manager123', PASSWORD_BCRYPT),
			'role' => 'manager'

		];
		$this->db->table('users')->Insert($data);
	}
}
