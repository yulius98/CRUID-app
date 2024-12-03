<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_dbeli_note extends Model
{
    protected $table = 'tbl_dbeli_notes';
    protected $primaryKey = 'id';
    protected $fillable=['NOTRANSAKSI','KODEBRG','HARGABELI','QTY','DISKON','TOTALRP'];
    public $timestamps = false;
}

