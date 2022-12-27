<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    // Untuk memanggil halaman fasilitas(Halaman Admin)
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view(
            'Backend.fasilitas.index',
            compact(
                'fasilitas'
            )
        );
    }

    // Untuk memanggil halaman create(Halaman Admin)
    public function create()
    {
        return view('Backend.fasilitas.create');
    }

    // Untuk menyimpan data yang di berikan dari petugas(Halaman Admin)
    public function store(Request $request)
    {
        $fasilitas = new Fasilitas;
        $fasilitas->gambar_fasilitas = $request->gambar_fasilitas;
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->status_fasilitas = $request->status_fasilitas;
        $fasilitas->deskripsi_fasilitas = $request->deskripsi_fasilitas;
        $fasilitas->save();
        return redirect()->route('fasilitas.index')->with('alert', 'Data Fasilitas Berhasil di Tambah');
    }

    // Untuk memanggil halaman show(Admin Page)
    public function show($id)
    {
        $fasilitas = Fasilitas::find($id);
        return view(
            'Backend.fasilitas.show',
            compact(
                'fasilitas'
            )
        );
    }

    // Untuk memanggil halaman edit(Halaman Admin)
    public function edit($id)
    {
        $fasilitas = Fasilitas::find($id);
        return view(
            'Backend.fasilitas.edit',
            compact(
                'fasilitas'
            )
        );
    }

    // Untuk menyimpan data apa saja yang telah di ubah(Halaman Admin) 
    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->gambar_fasilitas = $request->gambar_fasilitas;
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->status_fasilitas = $request->status_fasilitas;
        $fasilitas->deskripsi_fasilitas = $request->deskripsi_fasilitas;
        $fasilitas->save();
        return redirect()->route('fasilitas.index')->with('alert', 'Data Fasilitas Berhasil di Edit');
    }

    // Untuk menghapus data fasilitas(Halaman Admin)
    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id)->delete();
        return redirect()->route('fasilitas.index')->with('alert', 'Data Fasilitas Berhasil di Hapus');
    }
}