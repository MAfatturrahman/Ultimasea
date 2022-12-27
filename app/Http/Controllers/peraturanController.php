<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peraturan;

class PeraturanController extends Controller
{
    // Untuk memanggil halaman peraturan(Halaman Admin)
    public function index()
    {
        $peraturan = Peraturan::all();
        return view(
            'Backend.peraturan.index',
            compact(
                'peraturan'
            )
        );
    }

    // Untuk memanggil halaman create(Halaman Admin)
    public function create()
    {
        return view('Backend.peraturan.create');
    }

    // Untuk menyimpan data yang diisi oleh petugas(Halaman Admin)
    public function store(Request $request)
    {
        $peraturan = new Peraturan;
        $peraturan->nama_peraturan = $request->nama_peraturan;
        $peraturan->save();
        return redirect()->route('peraturan.index')->with('alert', 'Data Peraturan Berhasil di Tambah');
    }

    // Untuk memanggil halaman show(Halaman Admin)
    public function show($id)
    {
    }

    // Untuk memanggil halaman edit(Halaman Admin)
    public function edit($id)
    {
        $peraturan = Peraturan::find($id);
        return view(
            'Backend.peraturan.edit',
            compact(
                'peraturan'
            )
        );
    }

    // Untuk menyimpan data apa saja yang telah di ubah oleh petugas(Halaman Admin)
    public function update(Request $request, $id)
    {
        $peraturan = Peraturan::find($id);
        $peraturan->nama_peraturan = $request->nama_peraturan;
        $peraturan->save();
        return redirect()->route('peraturan.index')->with('alert', 'Data Peraturan Berhasil di Edit');
    }

    // Untuk menghapus data peraturan(Halaman Admin)
    public function destroy($id)
    {
        $peraturan = Peraturan::find($id)->delete();
        return redirect()->routes('peraturan.index')->with('alert', 'Data Peraturan Berhasil di Hapus');
    }
}