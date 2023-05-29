<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangan;

class tampilan_controller extends Controller
{
    public function indexhomeuser(){
        return view('user.userhomepage');
    }

    public function indexkalendar(){
        return view('user.kalendarruangan');
    }

    public function filterstatus(){
        $data_ruangan = ruangan::where('status','Belum Dipinjam')->get();
        return view('user.userhomepage',compact('data_ruangan'));
    }
}
