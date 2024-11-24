<?php

namespace App\Http\Controllers;

use App\Models\dt_pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function DaftarPembelian() {
        $data_pembelian = DB::table('tbl_hbeli_notes')
                          ->join('tbl_dbeli_notes','tbl_hbeli_notes.NOTRANSAKSI','=','tbl_dbeli_notes.NOTRANSAKSI')
                          ->join('tbl_supliers','tbl_hbeli_notes.KODESPL','=','tbl_supliers.KODESPL')
                          ->select('tbl_hbeli_notes.NOTRANSAKSI','tbl_hbeli_notes.TGLBELI','tbl_supliers.NAMASPL','tbl_dbeli_notes.KODEBRG','tbl_dbeli_notes.QTY','tbl_dbeli_notes.DISKON','tbl_dbeli_notes.TOTALRP')
                          ->paginate(10);  
              
        return view('daftar_pembelian',['title'=>'Daftar Pembelian'],compact(['data_pembelian']));

    }
}
