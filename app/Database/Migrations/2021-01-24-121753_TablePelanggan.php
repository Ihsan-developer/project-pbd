<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablePelanggan extends Migration
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
				'type' => 'CHAR',
				'constraint' => 8,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 25,
			],
			'kue' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 8,
			],
			'cabang' => [
				'type' => 'VARCHAR',
				'constraint' => 10,
			],
			'tgl' => [
				'type' => 'DATE',
			]


		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addUniqueKey('num');
		$this->forge->createTable('pelanggan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pelanggan');
	}
}
