<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangan;
use App\Models\peminjam;

class peminjam_controller extends Controller
{
    public function indexpeminjam(){
        $data_ruangan = ruangan::all();
        return view('admin.pagepeminjam',compact('data_ruangan'));
    }

    public function addpeminjam(Request $request){ 
        peminjam::create($request->all());
        return redirect('pageruangan')->with('sukses','pengajuan telah dikirim!');
        //dd($request);
    }

   

    public function userlogin(){
        return view('user.loginpage');
    }
}
