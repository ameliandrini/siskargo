<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->increments('pengiriman_id');
            $table->date('pengiriman_tanggal');
            $table->string('pengiriman_jenisbrg');
            $table->integer('pengiriman_jumlah');
            $table->integer('pengiriman_panjang');
            $table->integer('pengiriman_lebar');
            $table->decimal('pengiriman_totalberat');
            $table->string('pengiriman_namapengirim');
            $table->string('pengiriman_alamatpengirim');
            $table->string('pengiriman_nohppengirim');
            $table->string('pengiriman_kotapengirim');
            $table->string('pengiriman_namapenerima');
            $table->string('pengiriman_alamatpenerima');
            $table->string('pengiriman_nohppenerima');
            $table->string('pengiriman_kotapenerima');
            $table->string('pengiriman_ongkir');
            $table->string('pengiriman_statuskirim');
            $table->string('pengiriman_kurirkirim');
            $table->string('created_by');
            $table->timestamps('created_at');
            $table->string('updated_by');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengiriman');
    }
}
