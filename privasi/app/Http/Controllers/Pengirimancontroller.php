<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class Pengirimancontroller extends Controller
{
    public function listpengiriman()
    {
        $data_barangkiriman = DB::table('barangkiriman')->where('pengiriman_statuskirim', '=', '4')->get();
        if (auth()->user()->level == '1'){
            $data_pengiriman = \App\Pengiriman::all();
        }else{
            // $data_pengiriman = DB::table('view_pengirimanh')->where('pengiriman_kurirkirim', '=', auth()->user()->id)->get();
            $data_pengiriman = \App\Pengiriman::all();
        }
        
        return view('pengiriman/listpengiriman',['data_pengiriman' => $data_pengiriman,'data_barangkiriman' => $data_barangkiriman]);
    }
    public function addpengiriman()
    {
        $data_jenisbrg = \App\Master::all();
        $data_user = DB::table('users')->where('level', '=', '2')->get();
        
        
       return view('pengiriman/addpengiriman',['data_jenisbrg' => $data_jenisbrg,'data_user' => $data_user]);
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

        $dd3 = substr($request->pengirimanh_tgljln,0,2);
        $mm3 = substr($request->pengirimanh_tgljln,3,2);
        $yyyy3 = substr($request->pengirimanh_tgljln,6,4);
        $tgl3 = $yyyy3."-".$mm3."-".$dd3;

        DB::table('pengiriman_h')->insert(
            ['pengirimanh_harijln'=>$request->pengirimanh_harijln,'pengirimanh_tgljln'=>$tgl3,'pengirimanh_nopol'=>$request->pengirimanh_nopol,'pengirimanh_supir'=>$request->pengirimanh_supir,'pengirimanh_trip'=>$request->pengirimanh_trip,'pengirimanh_jenismuatan'=>$request->pengirimanh_jenismuatan,'pengirimanh_upahmobil'=>$request->pengirimanh_upahmobil,'pengirimanh_uangjalanjkt'=>$request->pengirimanh_uangjalanjkt,'pengirimanh_uangsisabkt'=>$request->pengirimanh_uangsisabkt,'pengirimanh_berat'=>$request->pengirimanh_berat,'pengirimanh_ket'=>$request->pengirimanh_ket,'created_by'=>$request->created_by,'updated_by'=>$request->updated_by,'created_at'=>$tgl1,'updated_at'=>$tgl2]
        );
        return 'berhasil';
    }
    public function editpengiriman($id)
    {
       $pengiriman = \App\Pengiriman::find($id);
       return view('pengiriman/editpengiriman',['pengiriman' => $pengiriman]);
    }
    public function updatepengiriman(Request $request, $id)
    {
        $pengiriman = \App\Pengiriman::find($id);
        $pengiriman->update($request->all());
        return 'berhasil';
    }
    public function deletepengiriman($id)
    {
       $pengiriman = \App\Pengiriman::find($id);
        $pengiriman->delete();
        return 'berhasil';
    }
    public function detailpengiriman($id)
    {
       $pengiriman = \App\Pengiriman::find($id);
       $data_pengiriman = DB::table('view_pengirimand')->where('pengirimanh_id', '=', $id)->get();
       return view('pengiriman/detailpengiriman',['pengiriman' => $pengiriman,'data_pengiriman' => $data_pengiriman]);
    }
    public function updatestatuspengiriman($id,$status)
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

        $pdf = PDF::loadView('pengiriman/invoicepengiriman', ['invoice' => $pengiriman])->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function suratjalan($id)
    {
    
        $pengiriman = \App\Pengiriman::find($id);

        $pdf = PDF::loadView('pengiriman/suratjalan', ['invoice' => $pengiriman])->setPaper('letter', 'potrait');;
        return $pdf->stream();
    }
    public function createitem(Request $request)
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

        

        DB::table('pengiriman_d')->insert(
            ['pengirimanh_id'=>$request->pengirimanh_id,'pengirimand_brgid'=>$request->pengirimand_brgid,'created_by'=>$request->created_by,'updated_by'=>$request->updated_by,'created_at'=>$tgl1,'updated_at'=>$tgl2]
        );
        DB::table('barangkiriman')
              ->where('pengiriman_id', $request->pengirimand_brgid)
              ->update(['pengiriman_statuskirim' => '1']);
        return 'berhasil';
    }
    
}
