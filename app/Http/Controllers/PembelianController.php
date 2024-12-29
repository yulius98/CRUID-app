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

    public function edit_pembelian($NOTRANSAKSI){
        $edit_pembelian = DB::table('tbl_hbeli_notes')
                          ->join('tbl_dbeli_notes','tbl_hbeli_notes.NOTRANSAKSI','=','tbl_dbeli_notes.NOTRANSAKSI')
                          ->join('tbl_supliers','tbl_hbeli_notes.KODESPL','=','tbl_supliers.KODESPL')
                          ->join('tbl_barangs','tbl_dbeli_notes.KODEBRG','=','tbl_barangs.KODEBRG') 
                          ->where('tbl_hbeli_notes.NOTRANSAKSI', $NOTRANSAKSI)
                          ->first();
                         
        return view('edit_pembelian',[
            'title' => 'Edit Pembelian',
            'edit_pembelian' => $edit_pembelian
        ]);
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

    public function getLastTransactionNumber()
    {
        // Ambil nomor urut terakhir dari database
        $lastTransaction = DB::table('pembelian')
            ->where('NOTRANSAKSI', 'like', 'B' . date('Y') . date('m') . '%')
            ->orderBy('NOTRANSAKSI', 'desc')
            ->first();
        dd($lastTransaction);
        if ($lastTransaction) {
            // Jika ada transaksi, ambil 3 digit terakhir
            $lastNumber = intval(substr($lastTransaction->NOTRANSAKSI, -3));
        } else {
            // Jika tidak ada transaksi, mulai dari 0
            $lastNumber = 0;
        }

        return response()->json(['last_number' => $lastNumber]);
    }

    public function update(Request $request, $NOTRANSAKSI)
    {
        $validatedData = $request->validate([
            'KODESPL' => 'required',
            'NAMASPL' => 'required', 
            'KODEBRG' => 'required',
            'NAMABRG' => 'required',
            'SATUAN' => 'required',
            'QTY' => 'required|numeric',
            'DISKON' => 'required|numeric',
            'TOTALRP' => 'required|numeric'
        ]);
        
        try {
            // Update tbl_supliers
            DB::table('tbl_supliers')
                ->where('KODESPL', $request->KODESPL)
                ->update([
                    'NAMASPL' => $request->NAMASPL
                ]);

            // Update tbl_barangs
            DB::table('tbl_barangs')
                ->where('KODEBRG', $request->KODEBRG)
                ->update([
                    'NAMABRG' => $request->NAMABRG,
                    'SATUAN' => $request->SATUAN,
                    'HARGABELI' => $request->TOTALRP
                ]);

            // Update tbl_dbeli_notes
            DB::table('tbl_dbeli_notes')
                ->where('NOTRANSAKSI', $NOTRANSAKSI)
                ->update([
                    'QTY' => $request->QTY,
                    'DISKON' => $request->DISKON,
                    'DISKONRP' => ($request->DISKON * $request->TOTALRP) / 100,
                    'TOTALRP' => $request->TOTALRP
                ]);

            // Update tbl_stock
            DB::table('tbl_stocks')
                ->where('KODEBRG', $request->KODEBRG)
                ->update([
                    'QTY' => $request->QTY
                ]);

            return redirect('/daftar_pembelian')->with('success', 'Data pembelian berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data: ' . $e->getMessage());
        }
    }

    public function index()
    {
        $data_pembelian = DB::table('tbl_hbeli_notes')
                        ->join('tbl_dbeli_notes','tbl_hbeli_notes.NOTRANSAKSI','=','tbl_dbeli_notes.NOTRANSAKSI')
                        ->join('tbl_supliers','tbl_hbeli_notes.KODESPL','=','tbl_supliers.KODESPL')
                    ->select('tbl_hbeli_notes.NOTRANSAKSI','tbl_hbeli_notes.TGLBELI','tbl_supliers.NAMASPL','tbl_dbeli_notes.KODEBRG','tbl_dbeli_notes.QTY','tbl_dbeli_notes.DISKON','tbl_dbeli_notes.TOTALRP')
                    ->paginate(10);  
        return view('daftar_pembelian', [
            'title' => 'Daftar Pembelian',
            'data_pembelian' => $data_pembelian
        ]);
    }

    public function destroy($NOTRANSAKSI, $KODEBRG) {
        // Menghapus data dari tbl_dbeli_notes berdasarkan NOTRANSAKSI dan KODEBRG
        $pembelian = DB::table('tbl_dbeli_notes')
            ->where('NOTRANSAKSI', $NOTRANSAKSI)
            ->where('KODEBRG', $KODEBRG)
            ->first(); // Mengambil data yang sesuai

        if ($pembelian) {
            try {
                // Menghapus data dari tbl_dbeli_notes
                DB::table('tbl_dbeli_notes')
                    ->where('NOTRANSAKSI', $NOTRANSAKSI)
                    ->where('KODEBRG', $KODEBRG)
                    ->delete(); // Menghapus data

                // Menghapus data dari tbl_stok
                $currentStock = DB::table('tbl_stok')
                    ->where('KODEBRG', $KODEBRG)
                    ->first();

                if ($currentStock) {
                    // Mengurangi QTY
                    $newQuantity = $currentStock->QTY - $pembelian->QTY; // Pastikan $pembelian->QTY adalah jumlah yang ingin dihapus
                    DB::table('tbl_stok')
                        ->where('KODEBRG', $KODEBRG)
                        ->update(['QTY' => $newQuantity]);
                }

                return response()->json(['message' => 'Data berhasil dihapus'], 200);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage()], 500);
            }
        }

        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }
}
