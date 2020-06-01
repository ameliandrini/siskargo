<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    public function listuser()
    {
        $data_user = \App\User::all();
        return view('user/listuser',['data_user' => $data_user]);
    }
    public function adduser()
    {
       return view('user/adduser');
    }
    public function create(Request $request)
    {
        // \App\User::create($request->all());
        DB::table('users')->insert(
            ['name' => $request->name, 'email' => $request->email,'password' => bcrypt($request->password),'remember_token' => Str::random(60)]
        );
        // dd($request->all());
        return 'berhasil';
    }
    public function edituser($id)
    {
       $user = \App\User::find($id);
       return view('user/edituser',['user' => $user]);
    }
    public function updateuser(Request $request, $id)
    {
        $user = \App\User::find($id);
        $user->update($request->all());
        return 'berhasil';
    }
    public function deleteuser($id)
    {
       $user = \App\User::find($id);
        $user->delete();
        return 'berhasil';
    }
}
