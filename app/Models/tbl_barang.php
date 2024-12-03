<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_barang extends Model
{
  
    protected $table = 'tbl_barangs';
    protected $primaryKey = 'id';
    protected $fillable=['KODEBRG','NAMABRG','SATUAN','HARGABELI'];
    public $timestamps = false;
}