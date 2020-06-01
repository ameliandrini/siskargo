<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $primaryKey = 'jenis_id';
   protected $table = 'jenis_barang';
   protected $fillable = ['jenis_nama','jenis_desc','created_by','updated_by'];
}
