<?php

namespace App\Http\Controllers;

use App\Exports\StockExport;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class stockcontroller extends Controller
{
    public function exportPdf() {
          
        $prtstock = DB::table('tbl_stocks') 
                    ->join('tbl_barangs','tbl_stocks.KODEBRG','=','tbl_barangs.KODEBRG')
                    ->get();
                          
        
        

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view("print_pdf",['title' =>'Daftar Stock'],compact('prtstock')));
        $mpdf->Output();                  
    }

    public function exportExcel() {
       
        return Excel::download(new StockExport,'laporan_stock.xlsx');
                  
    }


}
