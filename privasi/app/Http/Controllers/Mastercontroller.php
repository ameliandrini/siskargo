<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mastercontroller extends Controller
{
    public function listjenisbrg()
    {
        $data_jenisbrg = \App\Master::all();
        return view('master/listjenisbrg',['data_jenisbrg' => $data_jenisbrg]);
    }
    public function addjenisbrg()
    {
       return view('master/addjenisbrg');
    }
    public function create(Request $request)
    {
        \App\Master::create($request->all());
        return 'berhasil';
    }
    public function editjenisbrg($id)
    {
       $jenis_brg = \App\Master::find($id);
       return view('master/editjenisbrg',['jenis_brg' => $jenis_brg]);
    }
    public function updatejenisbrg(Request $request, $id)
    {
        $jenis_brg = \App\Master::find($id);
        $jenis_brg->update($request->all());
        return 'berhasil';
    }
    public function deletejenisbrg($id)
    {
       $jenis_brg = \App\Master::find($id);
        $jenis_brg->delete();
        return 'berhasil';
    }
}
