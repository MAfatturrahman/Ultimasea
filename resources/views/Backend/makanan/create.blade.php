@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Tambah Makanan</p>
    </div>
    <div class="d-flex flex-row gap-4">
        <div class="my_card w-75">
            <form method="POST" action="{{ url('makanan') }}">
                <div class="form-group row">
                    @csrf
                    <label class="col-sm-3 col-form-label mb-3">Gambar Makanan</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="gambar_makanan" placeholder="gambar.jpg" required>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Nama Makanan</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="nama_makanan" placeholder="soto" required>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Harga Makanan</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="harga_makanan" placeholder="100000" required>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Toko Makanan</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="toko_makanan" placeholder="bu siti" required>
                    </div>
                    <label class="col-sm-3 col-form-lable mb-5">Deskripsi</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="deskripsi_makanan" placeholder="deskripsi">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <a class="btn btn-primary" href="{{ url('makanan') }}">Kembali</a>
                    <button class="btn btn-success" type="submit">Selesai</button>
                </div>
            </form>
        </div>
        <div class="my_card w-50">
            <p class="text-center" style="color: red; font-size: 24px;">Perhatian</p>
            <p style="line-height: 1.8">Tata cara pengisian untuk menambahkan petugas baru :
                <br> 1. Nomor petugas harus berbeda dengan nilai yang sudah ada
                <br> 2. Nama petugas harus di isi dengan lengkap
                <br> 3. Isilah tugas yang telah di tentukan dari lamaran pekerjaan
                <br> 4. Tanggal lahir harus di isi sesuai dengan tanggal lahir petugas yang di terima oleh perusahaan
                ultimasea
                <br> 5. jika sudah maka petugas dapat menekan tombol tambahkan
                <br> 6. jika petugs ingin kembali tanpa menambahkan data maka petugas dapat menekan tombol kembali
                <br> 7. petugas tidak perlu memasukkan umur karna sistem akan langsung menghitung sendiri umur yang telah di
                miliki
                oleh karyawan baru
            </p>
        </div>
    </div>
@endsection
