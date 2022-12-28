@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Edit Role</p>
    </div>

    <div class="my_card">
        <form method="POST" action="{{ route('role.update', $role->id) }}">
            @csrf
            @method('PUT')
            <input class="form-control mb-4" type="text" name="name" placeholder="Nama Role" value="{{ $role->name }}"
                required>

            <div class="d-flex gap-4 flex-column flex-md-row">
                {{-- Petugas --}}
                <div class="d-flex flex-column lh-1">
                    <div class="form-group">
                        <h5>Petugas</h5>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('view-petugas', $permissions) ? 'checked' : '' }}
                            {{ in_array('view-petugas', $permissions) ? 'checked' : '' }} id="role" name="permission[]"
                            value="view-petugas">
                        <label for="role">view-petugas</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('create-petugas', $permissions) ? 'checked' : '' }}
                            {{ in_array('create-petugas', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="create-petugas">
                        <label for="role">create-petugas</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('edit-petugas', $permissions) ? 'checked' : '' }}
                            {{ in_array('edit-petugas', $permissions) ? 'checked' : '' }} id="role" name="permission[]"
                            value="edit-petugas">
                        <label for="role">edit-petugas</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('show-petugas', $permissions) ? 'checked' : '' }}
                            {{ in_array('show-petugas', $permissions) ? 'checked' : '' }} id="role" name="permission[]"
                            value="show-petugas">
                        <label for="role">show-petugas</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('delete-petugas', $permissions) ? 'checked' : '' }}
                            {{ in_array('delete-petugas', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="delete-petugas">
                        <label for="role">delete-petugas</label>
                    </div>
                </div>

                {{-- Makanan --}}
                <div class="d-flex flex-column lh-1">
                    <div class="form-group">
                        <h5>Makanan</h5>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('view-makanan', $permissions) ? 'checked' : '' }}
                            {{ in_array('view-makanan', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="view-makanan">
                        <label for="role">view-makanan</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('create-makanan', $permissions) ? 'checked' : '' }}
                            {{ in_array('create-makanan', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="create-makanan">
                        <label for="role">create-makanan</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('edit-makanan', $permissions) ? 'checked' : '' }}
                            {{ in_array('edit-makanan', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="edit-makanan">
                        <label for="role">edit-makanan</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('show-makanan', $permissions) ? 'checked' : '' }}
                            {{ in_array('show-makanan', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="show-makanan">
                        <label for="role">show-makanan</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('delete-makanan', $permissions) ? 'checked' : '' }}
                            {{ in_array('delete-makanan', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="delete-makanan">
                        <label for="role">delete-makanan</label>
                    </div>
                </div>

                {{-- Minuman --}}
                <div class="d-flex flex-column lh-1">
                    <div class="form-group">
                        <h5>Minuman</h5>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('view-minuman', $permissions) ? 'checked' : '' }}
                            {{ in_array('view-minuman', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="view-minuman">
                        <label for="role">view-minuman</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('create-minuman', $permissions) ? 'checked' : '' }}
                            {{ in_array('create-minuman', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="create-minuman">
                        <label for="role">create-minuman</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('edit-minuman', $permissions) ? 'checked' : '' }}
                            {{ in_array('edit-minuman', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="edit-minuman">
                        <label for="role">edit-minuman</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('show-minuman', $permissions) ? 'checked' : '' }}
                            {{ in_array('show-minuman', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="show-minuman">
                        <label for="role">show-minuman</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('delete-minuman', $permissions) ? 'checked' : '' }}
                            {{ in_array('delete-minuman', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="delete-minuman">
                        <label for="role">delete-minuman</label>
                    </div>
                </div>

                {{-- Fasilitas --}}
                <div class="d-flex flex-column lh-1">
                    <div class="form-group">
                        <h5>Fasilitas</h5>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('view-fasilitas', $permissions) ? 'checked' : '' }}
                            {{ in_array('view-fasilitas', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="view-fasilitas">
                        <label for="role">view-fasilitas</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('create-fasilitas', $permissions) ? 'checked' : '' }}
                            {{ in_array('create-fasilitas', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="create-fasilitas">
                        <label for="role">create-fasilitas</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('edit-fasilitas', $permissions) ? 'checked' : '' }}
                            {{ in_array('edit-fasilitas', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="edit-fasilitas">
                        <label for="role">edit-fasilitas</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('show-fasilitas', $permissions) ? 'checked' : '' }}
                            {{ in_array('show-fasilitas', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="show-fasilitas">
                        <label for="role">show-fasilitas</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('delete-fasilitas', $permissions) ? 'checked' : '' }}
                            {{ in_array('delete-fasilitas', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="delete-fasilitas">
                        <label for="role">delete-fasilitas</label>
                    </div>
                </div>

                {{-- Peraturan --}}
                <div class="d-flex flex-column lh-1">
                    <div class="form-group">
                        <h5>Peraturan</h5>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('view-peraturan', $permissions) ? 'checked' : '' }}
                            {{ in_array('view-peraturan', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="view-peraturan">
                        <label for="role">view-peraturan</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('create-peraturan', $permissions) ? 'checked' : '' }}
                            {{ in_array('create-peraturan', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="create-peraturan">
                        <label for="role">create-peraturan</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('edit-peraturan', $permissions) ? 'checked' : '' }}
                            {{ in_array('edit-peraturan', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="edit-peraturan">
                        <label for="role">edit-peraturan</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('delete-peraturan', $permissions) ? 'checked' : '' }}
                            {{ in_array('delete-peraturan', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="delete-peraturan">
                        <label for="role">delete-peraturan</label>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-4 flex-column flex-md-row">
                {{-- User Management --}}
                <div class="d-flex flex-column lh-1">
                    <div class="form-group">
                        <h5>User Management</h5>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('view-userManagement', $permissions) ? 'checked' : '' }}
                            {{ in_array('view-userManagement', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="view-userManagement">
                        <label for="role">view-userManagement</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('create-userManagement', $permissions) ? 'checked' : '' }}
                            {{ in_array('create-userManagement', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="create-userManagement">
                        <label for="role">create-userManagement</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('edit-userManagement', $permissions) ? 'checked' : '' }}
                            {{ in_array('edit-userManagement', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="edit-userManagement">
                        <label for="role">edit-userManagement</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('show-userManagement', $permissions) ? 'checked' : '' }}
                            {{ in_array('show-userManagement', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="show-userManagement">
                        <label for="role">show-userManagement</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('delete-userManagement', $permissions) ? 'checked' : '' }}
                            {{ in_array('delete-userManagement', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="delete-userManagement">
                        <label for="role">delete-userManagement</label>
                    </div>
                </div>

                {{-- Role --}}
                <div class="d-flex flex-column lh-1">
                    <div class="form-group">
                        <h5>Role Management</h5>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('view-role', $permissions) ? 'checked' : '' }}
                            {{ in_array('view-role', $permissions) ? 'checked' : '' }} id="role" name="permission[]"
                            value="view-role">
                        <label for="role">view-role</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('create-role', $permissions) ? 'checked' : '' }}
                            {{ in_array('create-role', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="create-role">
                        <label for="role">create-role</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('edit-role', $permissions) ? 'checked' : '' }}
                            {{ in_array('edit-role', $permissions) ? 'checked' : '' }} id="role" name="permission[]"
                            value="edit-role">
                        <label for="role">edit-role</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('show-role', $permissions) ? 'checked' : '' }}
                            {{ in_array('show-role', $permissions) ? 'checked' : '' }} id="role" name="permission[]"
                            value="show-role">
                        <label for="role">show-role</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('delete-role', $permissions) ? 'checked' : '' }}
                            {{ in_array('delete-role', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="delete-role">
                        <label for="role">delete-role</label>
                    </div>
                </div>

                {{-- Audit --}}
                <div class="d-flex flex-column lh-1">
                    <div class="form-group">
                        <h5>Audit</h5>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('view-audit', $permissions) ? 'checked' : '' }}
                            {{ in_array('view-audit', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="view-audit">
                        <label for="role">view-audit</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" {{ in_array('show-audit', $permissions) ? 'checked' : '' }}
                            {{ in_array('show-audit', $permissions) ? 'checked' : '' }} id="role"
                            name="permission[]" value="show-audit">
                        <label for="role">show-audit</label>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-between">
                <a class="btn btn-primary" href="{{ url('role') }}">Kembali</a>
                <button class="btn btn-success" type="submit">Perbaharui</button>
            </div>
        </form>
    </div><br>
@endsection
