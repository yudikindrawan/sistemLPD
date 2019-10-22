<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAngsuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angsurans', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedinteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('transaksi_id');
            $table->string('tanggal_pembayaran')->nullable();
            $table->decimal('jumlah_pembayaran')->default(0)->nullable();
            $table->decimal('sisa_pembayaran')->default(0)->nullable();
            $table->decimal('pembayaran_bunga')->default(0)->nullable();
            $table->decimal('pembayaran_denda')->default(0)->nullable();
            $table->decimal('sisa_kredit')->default(0)->nullable();
            $table->decimal('angsuran')->default(0)->nullable();
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
        Schema::dropIfExists('angsurans');
    }
}
