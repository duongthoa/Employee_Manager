<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('verified')->default(0);
		    $table->string('email_token')->nullable();
            $table->string('HoTenNV')->nullable();
            $table->date('NgaySinh')->nullable();
            $table->string('DiaChi')->nullable();
            $table->string('GioiTinh')->nullable();
            $table->string('SDT')->nullable();
            $table->string('CheckLogin')->default(0);
            $table->tinyInteger('Level')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
