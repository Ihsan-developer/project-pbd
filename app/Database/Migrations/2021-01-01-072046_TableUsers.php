<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableUsers extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 60,
			],
			'role' => [
				'type' => 'VARCHAR',
				'constraint' => 5,
			],
		]);
		$this->forge->addKey('id');
		$this->forge->addUniqueKey('email');
		$this->forge->CreateTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
