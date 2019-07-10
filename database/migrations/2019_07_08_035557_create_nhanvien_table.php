<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->increments('MaNV');
            $table->string('HoTenNV');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('level');
            $table->string('CheckLogin');
            $table->date('NgaySinh');
            $table->string('DiaChi');
            $table->string('GioiTinh');
            $table->string('SDT');
            $table->integer('MaPB');
            $table->integer('MaCV');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
