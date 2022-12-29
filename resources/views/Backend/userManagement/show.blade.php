@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Show User</p>
    </div>

    <div class="d-flex flex-sm-row flex-column gap-4">
        <div class="my_card align-self-baseline">
            <div class="form-group">
                <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                    <label class="form-label" style="width: 150px">Nama</label>
                    <div class="w-100">
                        <input class="form-control" type="text" name="name" placeholder="Nama"
                            value="{{ $user->name }}" required onclick="false">
                    </div>
                </div>

                <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                    <label class="form-label" style="width: 150px">Email</label>
                    <div class="w-100">
                        <input class="form-control" type="text" name="email" placeholder="pengguna@gmail.com"
                            value="{{ $user->email }}" required onclick="false">
                    </div>
                </div>

                <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                    <label class="form-label" style="width: 150px">Role</label>
                    <div class="w-100">
                        <input class="form-control" type="text" name="role" placeholder="Role"
                            value="{{ $user->getRoleNames()[0] }}" required onclick="false">
                    </div>
                </div>
            </div>

            <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                <label class="form-label" style="width: 150px" hidden onclick="false">Password</label>
                <div class="w-100">
                    <input class="form-control" type="text" name="password" placeholder="Pa$$w0rd"
                        value="{{ $user->password }}" required hidden>
                </div>
            </div>

            <div class="d-flex flex-sm-row flex-column justify-content-between">
                <a class="btn btn-primary" href="{{ url('userManagement') }}">Kembali</a>
            </div>
        </div>
        <div class="my_card align-self-baseline">
            <p class="text-center" style="color: red; font-size: 24px;">Perhatian</p>
            <p style="line-height: 1.8">Tata cara pengisian untuk menambahkan user baru :
                <br> 1. Nama Harus di isi, nama tersebut akan menjadi nama panggilan
                <br> 2. Email yang di masukkan harus sesuai dan tidak boleh sama dengan email yang sudah ada
                <br> 3. Password yang digunakan minimal menggandung 8 karakter
                <br> 4. Role yang di berikan tidak boleh sama seperti super admin
            </p>
        </div>
    </div>
@endsection
