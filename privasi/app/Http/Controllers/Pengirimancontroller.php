<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class Pengirimancontroller extends Controller
{
    public function listpengiriman()
    {
        if (auth()->user()->level == '1'){
            $data_pengiriman = \App\Pengiriman::all();
        }else{
            $data_pengiriman = DB::table('view_pengiriman')->where('pengiriman_kurirkirim', '=', auth()->user()->id)->get();
        }
        
        return view('pengiriman/listpengiriman',['data_pengiriman' => $data_pengiriman]);
    }
    public function addpengiriman()
    {
        $data_jenisbrg = \App\Master::all();
       return view('pengiriman/addpengiriman',['data_jenisbrg' => $data_jenisbrg]);
    }
    public function create(Request $request)
    {
        // \App\Pengiriman::create($request->all());
        $created_at = \Carbon\Carbon::now();
        $updated_at = \Carbon\Carbon::now();
        DB::table('pengiriman')->insert(
            ['pengiriman_tgl' =>\Carbon\Carbon::parse($request->pengiriman_tgl)->format('Y-d-m') ,'pengiriman_jenisbrg' => $request->pengiriman_jenisbrg,'pengiriman_jumlah' => $request->pengiriman_jumlah,'pengiriman_panjang' => $request->pengiriman_panjang,'pengiriman_lebar'=> $request->pengiriman_lebar,'pengiriman_totalberat'=> $request->pengiriman_totalberat,'pengiriman_namapengirim'=> $request->pengiriman_namapengirim,'pengiriman_alamatpengirim'=> $request->pengiriman_namapengirim,'pengiriman_nohppengirim'=> $request->pengiriman_nohppengirim,'pengiriman_kotapengirim'=> $request->pengiriman_kotapengirim,'pengiriman_namapenerima'=> $request->pengiriman_namapenerima,'pengiriman_alamatpenerima'=> $request->pengiriman_alamatpenerima,'pengiriman_nohppenerima'=> $request->pengiriman_nohppenerima,'pengiriman_kotapenerima'=> $request->pengiriman_kotapenerima,'pengiriman_ongkir'=> $request->pengiriman_ongkir,'created_by'=> $request->created_by,'updated_by'=> $request->updated_by,'created_at'=> \Carbon\Carbon::parse($created_at)->format('Y-d-m'),'updated_at'=> \Carbon\Carbon::parse($updated_at)->format('Y-d-m'),'pengiriman_statuskirim'=> '1']
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
       return view('pengiriman/detailpengiriman',['pengiriman' => $pengiriman]);
    }
    public function updatestatuspengiriman($id,$status)
    {
    //    $pengiriman = \App\Pengiriman::find($id);
       DB::table('pengiriman')
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
    
}
