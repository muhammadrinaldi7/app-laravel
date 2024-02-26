<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFjualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fjuals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_trans');
            $table->text('note');
            $table->double('subtotal',8,2);
            $table->double('pajak',8,2);
            $table->double('total',8,2);
            $table->string('metode');
            $table->char('kode_trans');
            $table->double('bayar',8,2);
            $table->double('kembali',8,2);
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
        Schema::dropIfExists('fjuals');
    }
}
