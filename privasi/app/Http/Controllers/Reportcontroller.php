<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class Reportcontroller extends Controller
{
    public function reportkirim()
    {
      return view('report/filterpengiriman');
    }
    public function pdfpengiriman(Request $request)
    {
    
        $pengiriman = DB::table('view_pengiriman')
        ->whereBetween('pengiriman_tgl', [\Carbon\Carbon::parse($request->pengiriman_tgl1)->format('Y-d-m'), \Carbon\Carbon::parse($request->pengiriman_tgl2)->format('Y-d-m')])
        ->get();

        $pdf = PDF::loadView('report/reportpengiriman', ['data_reportpengiriman' => $pengiriman])->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
