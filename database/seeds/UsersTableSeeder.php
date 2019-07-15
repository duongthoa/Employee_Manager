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
        App\Models\User::create([
        	'username' => 'duongthoa',
        	'email' =>'duongthoa98@gmail.com',
            'password' => bcrypt('123456'),
            'HoTenNV' => 'Dương Thoa',
            'Ngaysinh' => '1998-07-02',
            'DiaChi' => 'Đại La',
            'GioiTinh' => 'Nữ',
            'SDT' => '1234567890',
            'CheckLogin' => '0',
            'level' => '1'
        ]);
    }
}
