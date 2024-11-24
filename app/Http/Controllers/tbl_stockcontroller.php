<?php

namespace App\Http\Controllers;

use App\Models\tbl_suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tbl_stockcontroller extends Controller
{
    public function index(){
        $stock = DB::table('tbl_stocks') 
                    ->join('tbl_barangs','tbl_stocks.KODEBRG','=','tbl_barangs.KODEBRG')
                    ->paginate(10);
        return view('daftar_stock',['title' => 'Daftar Stock'],compact(['stock']));
    }
}