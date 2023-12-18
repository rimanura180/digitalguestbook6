<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MahasiswaController extends Controller
{
    public function index(){     

        //Untuk get data dari model ke controller
        $mahasiswas = Mahasiswa::all();

        // Dump and Die untuk melakukan debug/menampilkan informasi ttg variable/data
        // dd($mahasiswas);

        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create(){

        return view('mahasiswa.create');
    }

    public function store(Request $request){
        // dd($request->all());

         // Validasi data jika diperlukan 
         $request->validate([ 
            'nama' => 'required|string|max:255', 
            'alamat' => 'required|string|max:255', 
            'tanggal_lahir' => 'required|date'
        ]); 

        // Untuk menyimpan data dari controller ke model
        Mahasiswa::create([ 
            'nama' => $request->input('nama'), 
            'alamat' => $request->input('alamat'), 
            'tanggal_lahir' => $request->input('tanggal_lahir'), 
        
        ]);

         // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan 
         return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan.');
    }

    public function edit($id){

        $mahasiswas = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswas'));
    }

    public function update(Request $request, $id){
        // Validasi data jika diperlukan 
        $request->validate([ 
            'nama' => 'required|string|max:255', 
            'alamat' => 'required|string|max:255', 
            'tanggal_lahir' => 'required|date'
        ]); 

         // Temukan data mahasiswa yang akan diubah
        $mahasiswas = Mahasiswa::find($id);

        // Perbarui data mahasiswa
        $mahasiswas->nama = $request->input('nama');
        $mahasiswas->alamat = $request->input('alamat');
        $mahasiswas->tanggal_lahir = $request->input('tanggal_lahir');
        $mahasiswas->save();

        // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan 
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id){
        // Temukan data mahasisw yang akan dihapus
        $mahasiswas = Mahasiswa::find($id);

        if ($mahasiswas) {
            // Hapus data mahasiswa
            $mahasiswas->delete();

            // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan
            return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
        } else {
            return redirect()->route('mahasiswa.index')->with('error', 'Data mahasiswa tidak ditemukan.');
        }
    }
}
