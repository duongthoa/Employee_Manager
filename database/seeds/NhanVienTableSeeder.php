<?php

use Illuminate\Database\Seeder;

class NhanVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhanvien')->insert([
            'HoTenNV' => 'Dương Thoa',
        	'username' => 'duongthoa',
        	'email' =>'duongthoa98@gmail.com',
            'password' => bcrypt('123456'),
            'level' => '1',
            'CheckLogin' => '0',
            'Ngaysinh' => '1998-07-02',
            'DiaChi' => 'Đại La',
            'GioiTinh' => 'Nữ',
            'SDT' => '1234567890',
        ]);
    }
}