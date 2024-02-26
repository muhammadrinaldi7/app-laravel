<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_trans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bahan');
            $table->date('create_date');
            $table->time('create_time');
            $table->integer('masuk');
            $table->integer('keluar');
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
        Schema::dropIfExists('stok_trans');
    }
}
