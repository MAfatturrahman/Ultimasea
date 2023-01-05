<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;
use Illuminate\Support\Facades\Auth;

class MakananController extends Controller
{
    // Untuk memanggil halaman makanan(Halman Admin)
    public function index()
    {
        $makanan = Makanan::all();
        return view(
            'Backend.makanan.index',
            compact(
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
        $makanan = new Makanan;
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
        $makanan = Makanan::find($id);
        return view(
            'Backend.makanan.show',
            compact(
                'makanan'
            )
        );
    }

    // Untuk memanggil halaman edit(Halaman Edit)
    public function edit($id)
    {
        $makanan = Makanan::find($id);
        return view(
            'Backend.makanan.edit',
            compact(
                'makanan'
            )
        );
    }

    // Untuk 
    public function update(Request $request, $id)
    {
        $makanan = Makanan::find($id);
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
        $makanan = Makanan::find($id)->delete();
        return redirect()->route('makanan.index')->with('alert', 'Data Makanan Berhasil di Hapus');
    }

    // Untuk memanggil halaman makanan(Halaman User)
    public function makanan()
    {
        $makanan = Makanan::all();
        return view(
            'Frontend.makanan',
            compact(
                'makanan'
            )
        );
    }

    public function showMakanan($id)
    {
        $itemMakanan = Makanan::all();
        $makanan = Makanan::find($id);
        return view(
            'Frontend.showMakanan',
            compact(
                'makanan',
                'itemMakanan'
            )
        );
    }
}