<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelPenjual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjual', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_admin');
            $table->string('nama_toko');
            $table->string('nama_penjual');
            $table->string('email_penjual');
            $table->string('password_penjual');
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
        Schema::dropIfExists('penjual');
    }
}
