<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_hbeli_note extends Model
{
    protected $table = 'tbl_hbeli_notes';
    protected $primaryKey = 'id';
    protected $fillable=['NOTRANSAKSI','KODESPL','TGLBELI'];
    public $timestamps = false;
}
