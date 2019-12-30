<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{    
    public function index(){
        //Mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get(); 
        $pegawai = DB::table('pegawai')->paginate(10);

        //Mengirim data pegawai ke view index
        return view('pegawai/index',['pegawai'=> $pegawai]);
    }
    //Menampilkan form inputan
    public function tambah(){
        return view('pegawai/tambah');
    }
    //Fungsi save sebenarnya
    public function store(Request $request){
        // insert data ke table pegawai
	    DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
    //Method untuk show isian yang akan diisi
    public function edit($id){
        //mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        //passing data pegawai yang didapat ke view 
        return view('pegawai/edit',['pegawai'=>$pegawai]);
    }
    //Fungsi simpan sebenarnya
    public function update(Request $request){
        //update data pegawai
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan'=> $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        //Alihkan halaman ke pegawai
        return redirect('/pegawai');
    }
    //Method untuk show data yang akan di delete
    public function hapus($id){
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->delete();
        return redirect('/pegawai');
    }
    public function formulir(){
        return view('formulir');
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
