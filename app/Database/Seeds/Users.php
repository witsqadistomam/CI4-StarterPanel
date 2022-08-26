<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
	public function run()
	{
		$data = [
			'fullname' 		=> 'Developer Tester',
			'username'    	=> 'tester@mail.io',
			'password'    	=>  password_hash('123456', PASSWORD_DEFAULT),
			'role'    		=>  1,
			'created_at'    =>  date('Y-m-d h:i:s')
		];
		$this->db->table('users')->insert($data);
		$this->call('UserAccess');
		$this->call('UserMenu');
		$this->call('UserMenuCategory');
		$this->call('UserRole');
	}
}
