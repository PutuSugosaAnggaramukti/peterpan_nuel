<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangan;
use App\Models\peminjam;

class admin_controller extends Controller
{
    public function indexadmin(){
        $data_ruangan = ruangan::all();
        return view('admin.tambahruangan',compact('data_ruangan'));
    }


    public function indexpeminjam(){
        $data_peminjam = peminjam::all();
        return view('admin.datapeminjam',compact('data_peminjam'));
    }

    public function addpengajuan(Request $request){ 
        ruangan::create($request->all());
        return redirect('tambahruangan')->with('sukses','pengajuan telah dikirim!');
        //dd($request);
    }

    
    public function edit_ruangan(Request $request, $id){
        $data_ruangan = ruangan::find($id);
        $data_ruangan->nama_ruangan = $request->input('nama_ruangan');
        $data_ruangan->kategori = $request->input('kategori');
        $data_ruangan->kapasitas = $request->input('kapasitas');
        $data_ruangan->fasilitas = $request->input('fasilitas');
        $data_ruangan->status = $request->input('status');
        $data_ruangan->save();
        return redirect('tambahruangan');
    }

    public function findid($id){
        $data_ruangan = ruangan::where('id',$id)->first();
        $data = [
            'title' => 'ruangan',
            'data_ruangan' => $data_ruangan
        ];
        return view('admin.editruangan',$data);
    }

    public function vdataweb($id){
        $data_ruangan = ruangan::find($id);
        $data = [
            'title'=>'data',
            'data_ruangan'=>$data_ruangan
        ];
        return view('admin.validasi',$data);
    }

    public function deleteruangan($id){
        ruangan::where('id',$id)->delete();
        return redirect()->back();
    }

    public function filterstatus(){
        $data_ruangan = ruangan::where('status','Sudah Dipinjam')->get();
        return view('user.daftarruangan',compact('data_ruangan'));
    }

}
