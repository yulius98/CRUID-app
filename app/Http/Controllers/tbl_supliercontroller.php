<?php

namespace App\Http\Controllers;

use App\Models\tbl_suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tbl_supliercontroller extends Controller
{
    public function index(){
        $suplier = DB::table('tbl_supliers')
        ->paginate(10);
        return view('daftar_suplier',['title' => 'Daftar Suplier'],compact(['suplier']));
    }
}
