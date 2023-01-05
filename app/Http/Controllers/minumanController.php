<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Minuman;

class MinumanController extends Controller
{
    // Untuk memanggil halaman minuman(Halman Admin)
    public function index()
    {
        $minuman = Minuman::all();
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
        $minuman = new Minuman;
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
        $minuman = Minuman::find($id);
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
        $minuman = Minuman::find($id);
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
        $minuman = Minuman::find($id);
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
        $minuman = Minuman::find($id)->delete();
        return redirect()->route('minuman.index')->with('alert', 'Data Minuman Berhasil di Hapus');
    }

    // Untuk memanggil halaman minuman(Halaman User)
    public function minuman()
    {
        $minuman = Minuman::all();
        return view(
            'Frontend.minuman',
            compact(
                'minuman'
            )
        );
    }

    public function showMinuman($id)
    {
        $itemMinuman = Minuman::all();
        $minuman = Minuman::find($id);
        return view(
            'Frontend.showMinuman',
            compact(
                'minuman',
                'itemMinuman'
            )
        );
    }
}