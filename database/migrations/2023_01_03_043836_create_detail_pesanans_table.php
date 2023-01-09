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
        Schema::create('detail_pesanans', function (Blueprint $table) {
            $table->id('id_detail');
            $table->unsignedBigInteger('id_pesanan');
            $table->unsignedBigInteger('id_masakan');
            $table->integer('jumlah');
            $table->integer('sub_total');
            $table->text('keterangan_pesanan');
            $table->enum('status_detail_pesanan', ['dimasak', 'siap']);
            $table->timestamps();

            $table->foreign('id_masakan')->references('id_masakan')->on('masakans')->cascadeOnDelete();
            $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanans')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pesanans');
    }
};
