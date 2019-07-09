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
        DB::table('users')->truncate();
        App\User::create([
        	'username' => 'duongthoa',
        	//'email' =>'duongthoa98@gmail.com',
            'password' => '123456',
            'level' => '1',
            'CheckLogin' => '0'
        ]);
    }
}
