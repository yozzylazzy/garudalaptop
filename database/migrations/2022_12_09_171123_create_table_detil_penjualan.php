<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetilPenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_detil_penjualan', function (Blueprint $table) {
            $table->foreignId('IDTransaksi')->references('IDTransaksi')->on('table_penjualan');
            $table->foreignId('IDLaptop')->references('IDLaptop')->on('table_laptop');
            $table->integer('jumlah');
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
        Schema::dropIfExists('table_detil_penjualan');
    }
}
