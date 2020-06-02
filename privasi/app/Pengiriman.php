<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $primaryKey = 'pengiriman_id';
    protected $table = 'view_pengiriman';
    protected $fillable = ['pengiriman_tgl','pengiriman_jenisbrg','pengiriman_jumlah','pengiriman_panjang','pengiriman_lebar','pengiriman_totalberat','pengiriman_namapengirim','pengiriman_alamatpengirim','pengiriman_nohppengirim','pengiriman_kotapengirim','pengiriman_namapenerima','pengiriman_alamatpenerima','pengiriman_nohppenerima','pengiriman_kotapenerima','pengiriman_ongkir','created_by','updated_by'];
}
