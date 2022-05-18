<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelPembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->id();
            $table->string('id_admin')->nullable();
            $table->string('nama_pembeli');
            $table->string('email');
            $table->string('password');
            $table->string('jk_pembeli');
            $table->string('tlp_pembeli');
            $table->string('alamat_pembeli');
            $table->string('foto_pembeli')->nullable();
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
        Schema::dropIfExists('pembeli');
    }
}
