<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMenu extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'menu_category'      => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true
			],
			'title'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'url'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'icon'       => [
				'type'       => 'TEXT'
			],
			'parent'       => [
				'type'       => 'TINYINT',
				'constraint' => '1',
			],

		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user_menu');
	}

	public function down()
	{
		$this->forge->dropTable('user_menu');
	}
}
