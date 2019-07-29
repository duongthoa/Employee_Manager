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
            ['username' => 'duongthoa', 'email' =>'duongthoa98@gmail.com', 'password' => bcrypt('123456'), 'HoTenNV' => 'Dương Thoa', 'Ngaysinh' => '1998-07-02',
             'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567809', 'CheckLogin' => '0', 'level' => '1'],
            ['username' => 'duong', 'email' =>'duongthoa12@gmail.com', 'password' => bcrypt('135790'), 'HoTenNV' => 'Dương', 'Ngaysinh' => '1998-06-02',
             'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
            ['username' => 'thoa', 'email' =>'duongthoa34@gmail.com', 'password' => bcrypt('135791'), 'HoTenNV' => 'Thoa', 'Ngaysinh' => '1998-05-02',
             'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
        ]);
    }
}
