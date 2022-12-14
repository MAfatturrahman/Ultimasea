<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
    // Untuk memanggil halaman petugas(Halaman Admin)
    public function index()
    {
        $petugas = Petugas::all();
        return view('Backend.petugas.index')->with([
            'petugas' => $petugas,
        ]);
    }

    // Umtuk memanggil halaman create(Halaman Admin)
    public function create()
    {
        return view('Backend.petugas.create');
    }

    //Untuk menyimpan data yang di masukkan oleh petugas(Halaman Admin)
    public function store(Request $request)
    {
        $umur_petugas = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        if (Petugas::where('nomor_petugas', '=', $request->nomor_petugas)->exists()) {
            return redirect()->route('petugas.create')->with('alert', 'NP sudah ada');
        } else {
            $petugas = new Petugas;
            $petugas->nama_petugas = $request->nama_petugas;
            $petugas->nomor_petugas = $request->nomor_petugas;
            $petugas->email_petugas = $request->email_petugas;
            $petugas->nomor_telpon = $request->nomor_telpon;
            $petugas->tugas_petugas = $request->tugas_petugas;
            $petugas->tanggal_lahir = $request->tanggal_lahir;
            $petugas->umur_petugas = $umur_petugas;
            $petugas->save();
            return redirect()->route('petugas.index')->with('alert', 'Data Petugas Berhasil di Tambahkan');
        }
    }

    // Untuk memanggil halaman show(Halaman Admin)
    public function show($id)
    {
        $petugas = Petugas::find($id);
        return view(
            'Backend.petugas.show',
            compact(
                'petugas'
            )
        );
    }

    // Untuk memanggil halamana edit(Halaman Admin)
    public function edit($id)
    {
        $petugas = Petugas::find($id);
        return view(
            'Backend.petugas.edit',
            compact(
                'petugas'
            )
        );
    }

    // Untuk menyimpan data apa saja yang telah di ubah(Halaman Admin)
    public function update(Request $request, $id)
    {
        $umur_petugas = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        $petugas = Petugas::find($id);
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->nomor_petugas = $request->nomor_petugas;
        $petugas->tugas_petugas = $request->tugas_petugas;
        $petugas->email_petugas = $request->email_petugas;
        $petugas->nomor_telpon = $request->nomor_telpon;
        $petugas->tanggal_lahir = $request->tanggal_lahir;
        $petugas->umur_petugas = $umur_petugas;
        $petugas->save();
        return redirect()->route('petugas.index')->with('alert', 'Data Petugas Berhasil di Edit');
    }

    // Untuk menghapus data petugas
    public function destroy($id)
    {
        $petugas = Petugas::find($id)->delete();
        return redirect()->route('petugas.index')->with('alert', 'Data Petugas Berhasil di Hapus');
    }
}