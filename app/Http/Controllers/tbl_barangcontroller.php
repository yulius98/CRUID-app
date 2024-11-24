<?php

namespace App\Http\Controllers;

use App\Models\tbl_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tbl_barangcontroller extends Controller
{
    public function index(){
        $barang = DB::table('tbl_barangs')
        ->paginate(10);
    
        return view('daftar_barang',['title' =>'Daftar Barang'],compact(['barang']));
    }
}
