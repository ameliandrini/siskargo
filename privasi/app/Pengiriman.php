<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $primaryKey = 'pengirimanh_id';
    protected $table = 'view_pengirimanh';
    protected $fillable = ['pengirimanh_harijln','pengirimanh_tgljln','pengirimanh_nopol','pengirimanh_supir','pengirimanh_trip','pengirimanh_jenismuatan','pengirimanh_upahmobil','pengirimanh_uangjalanjkt','pengirimanh_uangsisabkt','pengirimanh_berat','pengirimanh_ket','created_by','updated_by'];
}
