@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Tambah Minuman</p>
    </div>
    <div class="d-flex flex-row gap-4">
        <div class="my_card w-75">
            <form method="POST" action="{{ url('minuman') }}">
                <div class="form-group row">
                    @csrf
                    <label class="col-sm-3 col-form-label mb-3">Gambar Minuman</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="gambar_minuman" placeholder="gambar.jpg" required>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Nama Minuman</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="nama_minuman" placeholder="es jeruk" required>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Harga Minuman</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="harga_minuman" placeholder="100000" required>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Toko Minuman</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="toko_minuman" placeholder="bu siti" required>
                    </div>
                    <label class="col-sm-3 col-form-lable mb-5">Deskripsi</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="deskripsi_minuman" placeholder="deskripsi">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <a class="btn btn-primary" href="{{ url('minuman') }}">Kembali</a>
                    <button class="btn btn-success" type="submit">Tambahkan</button>
                </div>
            </form>
        </div>
        <div class="my_card w-50">
            <p class="text-center" style="color: red; font-size: 24px;">Perhatian</p>
            <p style="line-height: 1.8">Tata cara pengisian untuk menambahkan minuman baru :
                <br> 1. Petugas harus menambah foto yang telah di berikan oleh penjual
                <br> 2. Nama minuman harus di isi dengan benar sesuai dengan pesanan penjual
                <br> 3. Harga yang terterah pada minuman harus sesuai logika dan masuk akal jangan sampai harganya di atas
                100000 rupiah
                <br> 4. Nama toko harus sesuai dengan pesanan penjual jangan sampai salah memasukkan nama toko atau kamu
                tanggung sendiri akibatnya
                <br> 5. Deskripsi toko yang harus di masukkan jangan terlalu banyak karna sistem akan langsung memotong
                deskripsinya secara langsung dan deskripsi tersebut tidak boleh menyinggu atau ada kata kata sarkas
            </p>
        </div>
    </div>
@endsection
