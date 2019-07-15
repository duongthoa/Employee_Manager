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
            $table->string('ChucVu');
            $table->integer('MaPB')->unsigned();
            $table->foreign('MaPB')->references('MaPB')->on('phongban');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
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
