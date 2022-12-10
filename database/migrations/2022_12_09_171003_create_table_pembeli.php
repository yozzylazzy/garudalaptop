<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pembeli', function (Blueprint $table) {
            $table->id('NIK');
            $table->string('nama');
            $table->string('alamat');
            $table->string('notelp');
            $table->string('kodegender');
            $table->string('pekerjaan');
            $table->date('tgllahir');
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
        Schema::dropIfExists('table_pembeli');
    }
}
