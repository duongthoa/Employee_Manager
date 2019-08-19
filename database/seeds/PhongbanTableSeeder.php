<?php

use Illuminate\Database\Seeder;

class PhongbanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phongban')->insert([
            ['TenPB' => 'Bộ phận quản lý'],
            ['TenPB' => 'Bộ phận kỹ thuật'],
            ['TenPB' => 'Bộ phận truyền thông'],
            ['TenPB' => 'Bộ phận tuyển dụng'],
        ]);
    }
}
