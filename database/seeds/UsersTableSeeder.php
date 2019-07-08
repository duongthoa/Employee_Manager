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
        	'password' => bcrypt('12345678')
        ]);
    }
}
