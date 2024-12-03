<?php

namespace App\Http\Controllers;

use App\Models\dt_pembelian;
use App\Models\tbl_barang;
use App\Models\tbl_dbeli_note;
use App\Models\tbl_hbeli_note;
use App\Models\tbl_stock;
use App\Models\tbl_suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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

    public function TambahPembelian(){


        return view('daftar_pembelian');
    }

    public function simpan(Request $request) {
        
        $add_tbl_barang = new tbl_barang();
        $add_tbl_barang->KODEBRG = $request->KODEBRG;
        $add_tbl_barang->NAMABRG = $request->NAMABRG;
        $add_tbl_barang->SATUAN = $request->SATUAN;
        $add_tbl_barang->HARGABELI = $request->TOTALRP;
        $add_tbl_barang->save();

        $add_tbl_suplier = new tbl_suplier();
        $add_tbl_suplier->KODESPL = $request->KODESPL;
        $add_tbl_suplier->NAMASPL = $request->NAMASPL;
        $add_tbl_suplier->save();

        $add_tbl_hbeli = new tbl_hbeli_note();
        $add_tbl_hbeli->NOTRANSAKSI = $request->NOTRANSAKSI;
        $add_tbl_hbeli->KODESPL = $request->KODESPL;
        $add_tbl_hbeli->TGLBELI = $request->TGLBELI; 
        $add_tbl_hbeli->save();

        $add_tbl_dbeli = new tbl_dbeli_note();
        $add_tbl_dbeli->NOTRANSAKSI = $request->NOTRANSAKSI;
        $add_tbl_dbeli->KODEBRG = $request->KODEBRG;
        $add_tbl_dbeli->HARGABELI = $request->TOTALRP;
        $add_tbl_dbeli->QTY = $request->QTY;
        $add_tbl_dbeli->DISKON = $request->DISKON;
        $add_tbl_dbeli->DISKONRP = ($request->DISKON * $request->TOTALRP) / 100;
        $add_tbl_dbeli->TOTALRP = $request->TOTALRP;
        $add_tbl_dbeli->save();

        $add_tbl_stock = new tbl_stock();
        $add_tbl_stock->KODEBRG = $request->KODEBRG;
        $add_tbl_stock->QTY = $request->QTY;
        $add_tbl_stock->save();

        
        $data_pembelian = DB::table('tbl_hbeli_notes')
                          ->join('tbl_dbeli_notes','tbl_hbeli_notes.NOTRANSAKSI','=','tbl_dbeli_notes.NOTRANSAKSI')
                          ->join('tbl_supliers','tbl_hbeli_notes.KODESPL','=','tbl_supliers.KODESPL')
                          ->select('tbl_hbeli_notes.NOTRANSAKSI','tbl_hbeli_notes.TGLBELI','tbl_supliers.NAMASPL','tbl_dbeli_notes.KODEBRG','tbl_dbeli_notes.QTY','tbl_dbeli_notes.DISKON','tbl_dbeli_notes.TOTALRP')
                          ->paginate(10);  
              
        return view('daftar_pembelian',['title'=>'Daftar Pembelian'],compact(['data_pembelian']));



    }
}
