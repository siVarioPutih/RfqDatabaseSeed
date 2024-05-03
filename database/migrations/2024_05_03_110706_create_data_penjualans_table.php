<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('data_penjualans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_barang');
            $table->integer('qty_jual');
            $table->string('tgl_transaksi_jual');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_penjualans');
    }
};
