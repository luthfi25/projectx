<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'seller a',
            //'password' => bcrypt('123456'),
			'password' => '123456',
            'fname' => 'nama',
            'lname' => 'panjang',
            'email' => 'seller@projectx.com',
            'address' => 'address',
            'phone' => '089858'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
        ]);
    }
}
