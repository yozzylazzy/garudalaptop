<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLaptop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_laptop', function (Blueprint $table) {
            $table->id('IDLaptop');
            $table->string('namalaptop');
            $table->string('merklaptop');
            $table->integer('harga');
            $table->string('cpu');
            $table->string('gpu');
            $table->integer('ram');
            $table->integer('disk');
            $table->double('batterycapacity');
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
        Schema::dropIfExists('table_laptop');
    }
}
