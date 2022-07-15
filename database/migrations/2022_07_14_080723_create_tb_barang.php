<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->increments('barang_id');
            $table->string('barang_nama', 20);
            $table->string('barang_merek', 50);
            $table->string('barang_hrgbeli', 20);
            $table->string('barang_hrgjual', 20);
            $table->string('barang_satuan', 50);
            $table->string('barang_stok', 11);
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
        Schema::dropIfExists('tb_barang');
    }
};
