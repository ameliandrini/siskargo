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
    
      $dd1 = substr($request->pengiriman_tgl1,0,2);
      $mm1 = substr($request->pengiriman_tgl1,3,2);
      $yyyy1 = substr($request->pengiriman_tgl1,6,4);
      $tgl1 = $yyyy1."-".$mm1."-".$dd1;

      $dd2 = substr($request->pengiriman_tgl2,0,2);
      $mm2 = substr($request->pengiriman_tgl2,3,2);
      $yyyy2 = substr($request->pengiriman_tgl2,6,4);
      $tgl2 = $yyyy2."-".$mm2."-".$dd2;
      // dd($fd);
      
        $pengiriman = DB::table('view_laporanbulanan')
        ->whereBetween('pengirimanh_tgljln', [$tgl1, $tgl2])
        ->get();

        $pdf = PDF::loadView('report/reportpengiriman', ['data_reportpengiriman' => $pengiriman])->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
