@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Tambah Minuman</p>
    </div>

    <div class="d-flex flex-sm-row flex-column gap-4">
        <div class="my_card align-self-baseline">
            <form method="POST" action="{{ url('minuman') }}">
                <div class="form-group">
                    @csrf
                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Gambar Minuman</label>
                        <div class="w-100">
                            <input class="form-control" type="text" name="gambar_minuman" placeholder="gambar.jpg"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Nama Minuman</label>
                        <div class="w-100">
                            <input class="form-control" type="text" name="nama_minuman" placeholder="es jeruk" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Harga Minuman</label>
                        <div class="w-100">
                            <input class="form-control" type="text" name="harga_minuman" placeholder="100000" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Toko Minuman</label>
                        <div class="w-100">
                            <input class="form-control" type="text" name="toko_minuman" placeholder="bu siti" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Deskripsi</label>
                        <div class="w-100">
                            <input class="form-control" type="text" name="deskripsi_minuman" placeholder="deskripsi">
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-sm-row flex-column gap-2 justify-content-between">
                    <a class="btn btn-primary" href="{{ url('minuman') }}">Kembali</a>
                    <button class="btn btn-success" type="submit">Tambahkan</button>
                </div>
            </form>
        </div>

        <div class="my_card align-self-baseline">
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
