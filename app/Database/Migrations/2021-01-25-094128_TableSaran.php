<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableSaran extends Migration
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
				'constraint' => 25,
			],
			'no' => [
				'type' => 'INT',
				'constraint' => 15,
			],
			'mail' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
			],
			'pesan' => [
				'type' => 'VARCHAR',
				'constraint' => 350,
			]


		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addUniqueKey('name');
		$this->forge->createTable('saran');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('saran');
	}
}
