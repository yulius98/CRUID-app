<?php

use App\Http\Controllers\PembelianController;
use App\Http\Controllers\stockcontroller;
use App\Models\tbl_barang;
use App\Models\tbl_suplier;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\tbl_barangcontroller;
use App\Http\Controllers\tbl_supliercontroller;
use App\Http\Controllers\tbl_stockcontroller;

Route::get('/',[tbl_barangcontroller::class,'Index']);

Route::get('/daftar_suplier',[tbl_supliercontroller::class,'Index']);

Route::get('/daftar_pembelian',[PembelianController::class,'DaftarPembelian']);

Route::get('/daftar_stock',[tbl_stockcontroller::class,'Index']);

Route::get('/export-pdf',[stockcontroller::class,'exportPdf'])->name('export.pdf');

Route::get('/export-excel',[stockcontroller::class,'exportExcel'])->name('export.excel');

Route::get('/daftar_pembelian/TambahPembelian',[PembelianController::class,'TambahPembelian']);

Route::post('/add_pembelian',[PembelianController::class,'simpan']);

Route::get('/add_pembelian',function(){
    return view('add_pembelian',['title'=> 'Pembelian']);
});
