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
            $table->string('transaksi_id');
            $table->string('tanggal_pembayaran')->nullable();
            $table->decimal('jumlah_pembayaran', 22, 2)->default(0)->nullable();
            $table->decimal('sisa_pembayaran', 22, 2)->default(0)->nullable();
            $table->decimal('pembayaran_bunga', 22, 2)->default(0)->nullable();
            $table->decimal('pembayaran_denda', 22, 2)->default(0)->nullable();
            $table->decimal('sisa_kredit', 22, 2)->default(0)->nullable();
            $table->decimal('angsuran',22, 2)->default(0)->nullable();
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
