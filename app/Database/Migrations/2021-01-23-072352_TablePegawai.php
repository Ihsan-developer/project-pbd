<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablePegawai extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'num' => [
				'type' => 'INT',
				'constraint' => 2,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'lokasi' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'gaji' => [
				'type' => 'FLOAT',
				'constraint' => 7,
			]

		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addUniqueKey('num');
		$this->forge->createTable('pegawai');
	}

	//--------------------------------------------------------------------

	public function down()
	{

		$this->forge->dropTable('pegawai');
	}
}
