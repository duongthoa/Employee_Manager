<?php

use Illuminate\Database\Seeder;

class Phongban_userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phongban_user')->insert([
            ['ChucVu' => 'Trưởng phòng', 'user_id' => '1', 'phongban_id' => '1'],
            ['ChucVu' => 'Trưởng phòng', 'user_id' => '2', 'phongban_id' => '2'],
            ['ChucVu' => 'Trưởng phòng', 'user_id' => '3', 'phongban_id' => '3'],
            ['ChucVu' => 'Trưởng phòng', 'user_id' => '4', 'phongban_id' => '4'],
            ['ChucVu' => 'Nhân viên', 'user_id' => '5', 'phongban_id' => '1'],
            ['ChucVu' => 'Nhân viên', 'user_id' => '6', 'phongban_id' => '2'],
            ['ChucVu' => 'Nhân viên', 'user_id' => '7', 'phongban_id' => '3'],
            ['ChucVu' => 'Nhân viên', 'user_id' => '8', 'phongban_id' => '4'],
            ['ChucVu' => 'Nhân viên', 'user_id' => '9', 'phongban_id' => '1'],
            ['ChucVu' => 'Nhân viên', 'user_id' => '10', 'phongban_id' => '2'],
            ['ChucVu' => 'Nhân viên', 'user_id' => '11', 'phongban_id' => '3'],
            ['ChucVu' => 'Nhân viên', 'user_id' => '12', 'phongban_id' => '4'],
        ]);
    }
}
