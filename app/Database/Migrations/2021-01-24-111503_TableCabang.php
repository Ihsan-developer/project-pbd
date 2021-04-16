<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableCabang extends Migration
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
				'constraint' => 1,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 20,
			],
			'lokasi' => [
				'type' => 'VARCHAR',
				'constraint' => 60,
			]

		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addUniqueKey('num');
		$this->forge->createTable('cabang');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('cabang');
	}
}
