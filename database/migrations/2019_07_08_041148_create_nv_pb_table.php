<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNvPbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nv_pb', function (Blueprint $table) {
            $table->integer('MaNV')->unsigned();
            $table->foreign('MaNV')->references('id')->on('users');
            $table->integer('MaPB')->unsigned();
            $table->foreign('MaPB')->references('id')->on('phongban');
            $table->string('ChucVu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nv_pb');
    }
}
