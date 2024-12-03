<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_suplier extends Model
{
    protected $table = 'tbl_supliers';
    protected $primaryKey = 'id';
    protected $fillable=['KODESPL','NAMASPL'];
    public $timestamps = false;
}
