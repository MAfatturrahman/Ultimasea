@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Edit Petugas</p>
    </div>

    <div class="d-flex flex-column flex-sm-row gap-4">
        <div class="my_card align-self-baseline">
            <form method="POST" action="{{ route('petugas.update', $petugas->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-lable" style="width: 150px">Nomor Petugas</label>
                        <div class="w-100">
                            <input class="form-control" value="{{ $petugas->nomor_petugas }}" type="text"
                                name="nomor_petugas" placeholder="10010" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-lable" style="width: 150px">Nama Petugas</label>
                        <div class="w-100">
                            <input class="form-control" value="{{ $petugas->nama_petugas }}" type="text"
                                name="nama_petugas" placeholder="Nama Petugas" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-lable" style="width: 150px">Tugas Petugas</label>
                        <div class="w-100">
                            <input class="form-control" value="{{ $petugas->tugas_petugas }}" type="text"
                                name="tugas_petugas" placeholder="Tugas Petugas" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-lable" style="width: 150px">Email Petugas</label>
                        <div class="w-100">
                            <input class="form-control" value="{{ $petugas->email_petugas }}" type="text"
                                name="email_petugas" placeholder="petugas@gmail.com" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-lable" style="width: 150px">Nomor HP</label>
                        <div class="w-100">
                            <input class="form-control" value="{{ $petugas->nomor_telpon }}" type="text"
                                name="nomor_telpon" placeholder="0812-5586-6698" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-lable" style="width: 150px">Tanggal Lahir</label>
                        <div class="w-100">
                            <input class="form-control" value="{{ $petugas->tanggal_lahir }}" type="date"
                                name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column gap-2 flex-sm-row justify-content-between">
                    <a class="btn btn-primary" href="{{ url('petugas') }}">Kembali</a>
                    <button class="btn btn-success" type="submit">Perbaharui</button>
                </div>
            </form>
        </div>

        <div class="my_card align-self-baseline">
            <p class="text-center" style="color: red; font-size: 24px;">Perhatian</p>
            <p style="line-height: 1.8">Tata cara pengisian untuk mengedit petugas :
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
