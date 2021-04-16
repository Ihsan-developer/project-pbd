<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableKue extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'kode' => [
				'type' => 'INT',
				'constraint' => 3,
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 2,
			],
			'harga' => [
				'type' => 'FLOAT',
				'constraint' => 5,
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addUniqueKey('kode');
		$this->forge->createTable('kue');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kue');
	}
}
