<?php

namespace App\Exports;

use App\Models\tbl_stock;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as FacadesView;
use Maatwebsite\Excel\Concerns\FromView;

class StockExport implements FromView
{
    /**
    * @return \Illuminate\Contracts\View\View
    */
    public function view(): View
    {
        $prtstock = DB::table('tbl_stocks') 
                    ->join('tbl_barangs','tbl_stocks.KODEBRG','=','tbl_barangs.KODEBRG')
                    ->get();
        return view("print_pdf",['title' =>'Daftar Stock'],compact('prtstock'));
    }
    
    
    
    
    
             
    
}
