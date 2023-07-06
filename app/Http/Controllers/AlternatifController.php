<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class AlternatifController extends Controller {

    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        $alternatif = Alternatif::where('id', $id)->first();

        return view('editdataalternatif', [
            'alternatif' => $alternatif,
            'title' => 'Edit Data alternatif'
        ]);

    }

    public function update(Request $request, $id) {
        $nama      = $request->input('nama');
        $deskripsi = $request->input('deskripsi');
        $presentase_keuntungan       = $request->input('presentase_keuntungan');
        $tempo_pembayaran   = $request->input('tempo_pembayaran');
        $kualitas_produk = $request->input('kualitas_produk');
        $layanan_keluhan = $request->input('layanan_keluhan');
        $bonus = $request->input('bonus');
        $ketepatan_waktu = $request->input('ketepatan_waktu');
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->nama    = $nama;
        $deskripsi->deskripsi = $deskripsi;
        $alternatif->presentase_keuntungan     = $presentase_keuntungan;
        $alternatif->tempo_pembayaran = $tempo_pembayaran;
        $alternatif->kualitas_produk = $kualitas_produk;
        $alternatif->layanan_keluhan = $layanan_keluhan;
        $alternatif->bonus = $bonus;
        $alternatif->ketepatan_waktu = $ketepatan_waktu;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $nama      = $request->input('nama');
        $deskripsi      = $request->input('deskripsi');
        $presentase_keuntungan       = $request->input('presentase_keuntungan');
        $tempo_pembayaran   = $request->input('tempo_pembayaran');
        $kualitas_produk = $request->input('kualitas_produk');
        $layanan_keluhan = $request->input('layanan_keluhan');
        $bonus = $request->input('bonus');
        $ketepatan_waktu = $request->input('ketepatan_waktu');
        

        $alternatif           = new Alternatif;
        $alternatif->nama    = $nama;
        $alternatif->deskripsi    = $deskripsi;
        $alternatif->presentase_keuntungan     = $presentase_keuntungan;
        $alternatif->tempo_pembayaran = $tempo_pembayaran;
        $alternatif->kualitas_produk = $kualitas_produk;
        $alternatif->layanan_keluhan = $layanan_keluhan;
        $alternatif->bonus = $bonus;
        $alternatif->ketepatan_waktu = $ketepatan_waktu;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}
