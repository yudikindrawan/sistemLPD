<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBungakreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bungakredits', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('bunga')->nullable();
            $table->enum('jenis_bunga', ['FlateRate','Anuitas','Sliding','FloatingRate'])->nullable();
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
        Schema::dropIfExists('bungakredits');
    }
}
