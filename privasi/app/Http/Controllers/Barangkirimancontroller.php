<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class Barangkirimancontroller extends Controller
{
    public function listbarangkiriman()
    {
        if (auth()->user()->level == '1'){
            $data_pengiriman = \App\Pengiriman::all();
        }else{
            $data_pengiriman = DB::table('view_pengiriman')->where('pengiriman_kurirkirim', '=', auth()->user()->id)->get();
        }
        
        return view('barangkiriman/listbarangkiriman',['data_pengiriman' => $data_pengiriman]);
    }
    public function addbarangkiriman()
    {
        $data_jenisbrg = \App\Master::all();
        
       return view('barangkiriman/addbarangkiriman',['data_jenisbrg' => $data_jenisbrg]);
    }
    public function create(Request $request)
    {
        // \App\Pengiriman::create($request->all());
        $created_atawal = \Carbon\Carbon::now();
        $updated_atawal = \Carbon\Carbon::now();
        $created_at = \Carbon\Carbon::parse($created_atawal)->format('d/m/Y');
        $updated_at = \Carbon\Carbon::parse($updated_atawal)->format('d/m/Y');

        $dd1 = substr($created_at,0,2);
        $mm1 = substr($created_at,3,2);
        $yyyy1 = substr($created_at,6,4);
        $tgl1 = $yyyy1."-".$mm1."-".$dd1;

        $dd2 = substr($updated_at,0,2);
        $mm2 = substr($updated_at,3,2);
        $yyyy2 = substr($updated_at,6,4);
        $tgl2 = $yyyy2."-".$mm2."-".$dd2;

        $dd3 = substr($request->pengiriman_tgl,0,2);
        $mm3 = substr($request->pengiriman_tgl,3,2);
        $yyyy3 = substr($request->pengiriman_tgl,6,4);
        $tgl3 = $yyyy3."-".$mm3."-".$dd3;

        

        DB::table('barangkiriman')->insert(
            ['pengiriman_tgl' =>$tgl3 ,'pengiriman_jenisbrg' => $request->pengiriman_jenisbrg,'pengiriman_jumlah' => $request->pengiriman_jumlah,'pengiriman_panjang' => $request->pengiriman_panjang,'pengiriman_lebar'=> $request->pengiriman_lebar,'pengiriman_totalberat'=> $request->pengiriman_totalberat,'pengiriman_namapengirim'=> $request->pengiriman_namapengirim,'pengiriman_alamatpengirim'=> $request->pengiriman_namapengirim,'pengiriman_nohppengirim'=> $request->pengiriman_nohppengirim,'pengiriman_kotapengirim'=> $request->pengiriman_kotapengirim,'pengiriman_namapenerima'=> $request->pengiriman_namapenerima,'pengiriman_alamatpenerima'=> $request->pengiriman_alamatpenerima,'pengiriman_nohppenerima'=> $request->pengiriman_nohppenerima,'pengiriman_kotapenerima'=> $request->pengiriman_kotapenerima,'pengiriman_ongkir'=> $request->pengiriman_ongkir,'created_by'=> $request->created_by,'updated_by'=> $request->updated_by,'created_at'=> $tgl1,'updated_at'=> $tgl2,'pengiriman_statuskirim'=> '1']
        );
        return 'berhasil';
    }
    public function editbarangkiriman($id)
    {
       $pengiriman = \App\Pengiriman::find($id);
       return view('barangkiriman/editbarangkiriman',['pengiriman' => $pengiriman]);
    }
    public function updatebarangkiriman(Request $request, $id)
    {
        $pengiriman = \App\Pengiriman::find($id);
        $pengiriman->update($request->all());
        return 'berhasil';
    }
    public function deletebarangkiriman($id)
    {
       $pengiriman = \App\Pengiriman::find($id);
        $pengiriman->delete();
        return 'berhasil';
    }
    public function detailbarangkiriman($id)
    {
       $pengiriman = \App\Pengiriman::find($id);
       return view('barangkiriman/detailbarangkiriman',['pengiriman' => $pengiriman]);
    }
    public function updatestatusbarangkiriman($id,$status)
    {
    //    $pengiriman = \App\Pengiriman::find($id);
       DB::table('barangkiriman')
              ->where('pengiriman_id', $id)
              ->update(['pengiriman_statuskirim' => $status]);
        return 'berhasil';
    }
    public function invoicepengiriman($id)
    {
    
        $pengiriman = \App\Pengiriman::find($id);

        $pdf = PDF::loadView('barangkiriman/invoicepengiriman', ['invoice' => $pengiriman])->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function suratjalan($id)
    {
    
        $pengiriman = \App\Pengiriman::find($id);

        $pdf = PDF::loadView('barangkiriman/suratjalan', ['invoice' => $pengiriman])->setPaper('letter', 'potrait');;
        return $pdf->stream();
    }
    
}
