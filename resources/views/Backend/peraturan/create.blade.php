@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Tambah Peraturan</p>
    </div>
    <div class="d-flex flex-row gap-4">
        <div class="my_card w-75">
            <form method="POST" action="{{ url('peraturan') }}">
                <div class="form-group row">
                    @csrf
                    <label class="col-sm-3 col-form-label mb-3">Nama Peraturan</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="nama_peraturan" placeholder="larangan" required>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <a class="btn btn-primary" href="{{ url('peraturan') }}">Kembali</a>
                    <button class="btn btn-success" type="submit">Tambahkan</button>
                </div>
            </form>
        </div>
        <div class="my_card w-50">
            <p class="text-center" style="color: red; font-size: 24px;">Perhatian</p>
            <p style="line-height: 1.8">Tata cara pengisian untuk menambahkan peraturan baru :
                <br>1. Petugas harus mengisi peraturan yang ada di samping dan peraturan tersebut akan langsung tertera pada
                halaman awal atau halaman peraturan
            </p>
        </div>
    </div>
@endsection
