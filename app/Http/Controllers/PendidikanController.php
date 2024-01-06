<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    function tampil (){
        $data = Pendidikan::all();
        return view("welcome", ['data' => $data]);
    }
    function tambah_data (Request $request) {
        Pendidikan::create([
            'nama_sekolah' => $request->input('nama'),
            'tahun_masuk' => $request->input('tahun_masuk'),
            'tahun_keluar' => $request->input('tahun_keluar'),
        ]);

        return response()->json(['message' => 'Data berhasil disimpan'], 201);
    }
    public function delete($id)
    {
        // Temukan data berdasarkan ID
        $data = Pendidikan::find($id);

        // Periksa apakah data ditemukan
        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        // Hapus data
        $data->delete();

        return response()->json(['message' => 'Data berhasil dihapus'], 200);
    }

    public function update (Request $request, $id){
        $data = Pendidikan::find($id);

       
        if (!$data) {
            return response()->json(['message' => 'Data tidak ada'], 404);
        }
    
        $data->update([
            'nama_sekolah' => $request->input('nama'),
            'tahun_masuk' => $request->input('tahun_masuk'),
            'tahun_keluar' => $request->input('tahun_keluar'),
        ]);
    
        return response()->json(['message' => 'Data sukses di edit'], 200);
    }
}
