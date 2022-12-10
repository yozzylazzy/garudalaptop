<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_penjualan', function (Blueprint $table) {
            $table->id('IDTransaksi');
            $table->foreignId('NIK')->references('NIK')->on('table_pembeli');
            $table->foreignId('IDAdmin')->references('IDAdmin')->on('table_admin');
            $table->date('tglpembelian');
            $table->string('metodepembayaran');
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
        Schema::dropIfExists('table_penjualan');
    }
}
