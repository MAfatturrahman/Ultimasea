<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\minuman;

class minumanController extends Controller
{
    // Untuk memanggil halaman minuman(Halman Admin)
    public function index()
    {
        $minuman = minuman::all();
        return view(
            'Backend.minuman.index',
            compact(
                'minuman'
            )
        );
    }

    // Untuk memanggil halaman create(Halman Admin)
    public function create()
    {
        return view('Backend.minuman.create');
    }

    // Untuk menyimpan data yang di masukkan oleh petugas(Halman Admin)
    public function store(Request $request)
    {
        $minuman = new minuman;
        $minuman->gambar_minuman = $request->gambar_minuman;
        $minuman->nama_minuman = $request->nama_minuman;
        $minuman->harga_minuman = $request->harga_minuman;
        $minuman->deskripsi_minuman = $request->deskripsi_minuman;
        $minuman->toko_minuman = $request->toko_minuman;
        $minuman->save();
        return redirect()->route('minuman.index')->with('alert', 'Data Minuman Berhasil di Tambah');
    }

    // Untuk memanggil halaman show(Halaman Admin)
    public function show($id)
    {
        $minuman = minuman::find($id);
        return view(
            'Backend.minuman.show',
            compact(
                'minuman'
            )
        );
    }

    // Untuk memanggil halaman edit(Halaman Edit)
    public function edit($id)
    {
        $minuman = minuman::find($id);
        return view(
            'Backend.minuman.edit',
            compact(
                'minuman'
            )
        );
    }

    // Untuk 
    public function update(Request $request, $id)
    {
        $minuman = minuman::find($id);
        $minuman->gambar_minuman = $request->gambar_minuman;
        $minuman->nama_minuman = $request->nama_minuman;
        $minuman->harga_minuman = $request->harga_minuman;
        $minuman->deskripsi_minuman = $request->deskripsi_minuman;
        $minuman->toko_minuman = $request->toko_minuman;
        $minuman->save();
        return redirect()->route('minuman.index')->with('alert', 'Data Minuman Berhasil di Edit');
    }

    // Untuk menghapus data minuman(Halaman Admin)
    public function destroy($id)
    {
        $minuman = minuman::find($id)->delete();
        return redirect()->route('minuman.index')->with('alert', 'Data Minuman Berhasil di Hapus');
    }
}