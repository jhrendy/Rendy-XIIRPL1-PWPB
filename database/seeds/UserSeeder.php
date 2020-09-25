<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	'name' 		=> 'admin',
        	'email' 	=> 'admin@gmail.com',
        	'password' 	=> bcrypt('admin1')
        	]);

        $admin->assignRole('admin');

        $user = User::create([
        	'name' 		=> 'user',
        	'email' 	=> 'user@gmail.com',
        	'password' 	=> bcrypt('user1')
        	]);
        $user->assignRole('user');


    }
}
