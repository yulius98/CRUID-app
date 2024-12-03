<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_stock extends Model
{
    protected $table = 'tbl_stocks';
    protected $fillable=['KODEBRG','QTY'];
    public $timestamps = false;
}
