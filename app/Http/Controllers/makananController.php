<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\makanan;

class makananController extends Controller
{
    // Untuk memanggil halaman makanan(Halman Admin)
    public function index()
    {
        $makanan = makanan::all();
        return view('Backend.makanan.index', compact(
            'makanan'
        )
        );
    }

    // Untuk memanggil halaman create(Halman Admin)
    public function create()
    {
        return view('Backend.makanan.create');
    }

    // Untuk menyimpan data yang di masukkan oleh petugas(Halman Admin)
    public function store(Request $request)
    {
        $makanan = new makanan;
        $makanan->gambar_makanan = $request->gambar_makanan;
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->harga_makanan = $request->harga_makanan;
        $makanan->deskripsi_makanan = $request->deskripsi_makanan;
        $makanan->toko_makanan = $request->toko_makanan;
        $makanan->save();
        return redirect()->route('makanan.index')->with('alert', 'Data Makanan Berhasil di Tambah');
    }

    // Untuk memanggil halaman show(Halaman Admin)
    public function show($id)
    {
        $makanan = makanan::find($id);
        return view('Backend.makanan.show', compact(
            'makanan'
        )
        );
    }

    // Untuk memanggil halaman edit(Halaman Edit)
    public function edit($id)
    {
        $makanan = makanan::find($id);
        return view('Backend.makanan.show', compact(
            'makanan'
        )
        );
    }

    // Untuk 
    public function update(Request $request, $id)
    {
        $makanan = makanan::find($id);
        $makanan->gambar_makanan = $request->gambar_makanan;
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->harga_makanan = $request->harga_makanan;
        $makanan->deskripsi_makanan = $request->deskripsi_makanan;
        $makanan->toko_makanan = $request->toko_makanan;
        $makanan->save();
        return redirect()->route('makanan.index')->with('alert', 'Data Makanan Berhasil di Edit');
    }

    // Untuk menghapus data makanan(Halaman Admin)
    public function destroy($id)
    {
        $makanan = makanan::find($id)->delete();
        return redirect()->route('makanan.index')->with('alert', 'Data Makanan Berhasil di Hapus');
    }
}