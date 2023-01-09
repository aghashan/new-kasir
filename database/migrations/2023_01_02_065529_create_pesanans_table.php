<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->date('tgl_pesanan');
            $table->unsignedBigInteger('id_user');
            $table->integer('no_meja');
            $table->integer('total_harga');
            $table->integer('bayar');
            $table->integer('kembali');
            $table->enum('status_pesanan',['0','1']);
            $table->enum('status_makanan_pesanan',['sedang proses','siap antar','telah tersaji','dibawa pulang']);
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
};
