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
            ['username' => 'thoaduong', 'email' =>'duongthoa13@gmail.com', 'password' => bcrypt('135792'), 'HoTenNV' => 'Thoa Dương', 'Ngaysinh' => '1998-05-02',
            'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
            ['username' => 'thanh', 'email' =>'duongthoa14@gmail.com', 'password' => bcrypt('135793'), 'HoTenNV' => 'Thành', 'Ngaysinh' => '1998-05-02',
            'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
            ['username' => 'le', 'email' =>'duongthoa15@gmail.com', 'password' => bcrypt('135794'), 'HoTenNV' => 'Lê', 'Ngaysinh' => '1998-05-02',
            'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
            ['username' => 'thanhle', 'email' =>'duongthoa16@gmail.com', 'password' => bcrypt('135795'), 'HoTenNV' => 'Thành Lê', 'Ngaysinh' => '1998-05-02',
            'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
            ['username' => 'lethanh', 'email' =>'duongthoa17@gmail.com', 'password' => bcrypt('135796'), 'HoTenNV' => 'Lê Thành', 'Ngaysinh' => '1998-05-02',
            'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
            ['username' => 'xinh', 'email' =>'duongthoa18@gmail.com', 'password' => bcrypt('135797'), 'HoTenNV' => 'Xinh', 'Ngaysinh' => '1998-05-02',
            'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
            ['username' => 'vu', 'email' =>'duongthoa19@gmail.com', 'password' => bcrypt('135798'), 'HoTenNV' => 'Vũ', 'Ngaysinh' => '1998-05-02',
            'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
            ['username' => 'vuxinh', 'email' =>'duongthoa10@gmail.com', 'password' => bcrypt('135799'), 'HoTenNV' => 'Xinh Vũ', 'Ngaysinh' => '1998-05-02',
            'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
            ['username' => 'xinhvu', 'email' =>'duongthoa11@gmail.com', 'password' => bcrypt('24680'), 'HoTenNV' => 'Vũ Xinh', 'Ngaysinh' => '1998-05-02',
            'DiaChi' => 'Đại La', 'GioiTinh' => 'Nữ', 'SDT' => '1234567890', 'CheckLogin' => '0', 'level' => '0'],
        ]);
    }
}
