<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_transaksis', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedinteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedinteger('bunga_id');
            $table->foreign('bunga_id')->references('id')->on('bungakredits')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tanggal_kredit')->nullable();
            $table->string('jaminan')->nullable();
            $table->string('jangka_waktu')->default(0);
            $table->decimal('jumlah_kredit', 22, 2)->default(0);
            $table->decimal('angsuran_pokok', 22, 2)->default(0);
            $table->decimal('biaya_bunga', 22, 2)->default(0);
            $table->decimal('total', 22, 2)->default(0);
            $table->decimal('biaya_admin', 22, 2)->default(0)->nullable();
            $table->decimal('biaya_materai', 22, 2)->default(0)->nullable();
            $table->enum('status_tunggakan', ['Lancar','Macet'])->default('Lancar');;
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
        Schema::dropIfExists('riwayat_transaksis');
    }
}
