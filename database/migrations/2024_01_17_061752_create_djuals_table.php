<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDjualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('djuals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_trans');
            $table->string('item');
            $table->integer('qty');
            $table->double('item_subtotal',8,2);
            $table->double('subtotal',8,2);
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
        Schema::dropIfExists('djuals');
    }
}
