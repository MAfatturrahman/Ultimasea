@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Edit Peraturan</p>
    </div>
    <div class="d-flex flex-sm-row flex-column gap-4">
        <div class="my_card align-self-baseline">
            <form method="POST" action="{{ route('peraturan.update', $peraturan->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Nama Peraturan</label>
                        <div class="w-100">
                            <input value="{{ $peraturan->nama_peraturan }}" class="form-control" type="text"
                                name="nama_peraturan" placeholder="larangan" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-sm-row flex-column gap-2 justify-content-between">
                    <a class="btn btn-primary" href="{{ url('peraturan') }}">Kembali</a>
                    <button class="btn btn-success" type="submit">Perbaharui</button>
                </div>
            </form>
        </div>
        <div class="my_card align-self-baseline">
            <p class="text-center" style="color: red; font-size: 24px;">Perhatian</p>
            <p style="line-height: 1.8">Tata cara pengisian untuk menambahkan peraturan baru :
                <br>1. Petugas harus mengisi peraturan yang ada di samping dan peraturan tersebut akan langsung tertera pada
                halaman awal atau halaman peraturan
            </p>
        </div>
    </div>
@endsection
