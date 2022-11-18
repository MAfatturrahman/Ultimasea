@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <a class="btn btn-success mb-3 mt-3" href="{{ route('petugas.create') }}">Tambah</a>
        <p class="btn btn-primary mb-3 mt-3">Halaman Petugas</p>
    </div>

    <div class="my_card" style="width: 100%; margin: auto;"><br>
        {{-- Table Petugas --}}
        @php
            $heads = [['label' => 'No', 'no-export' => true, 'width' => 1], 'NP', 'Nama', 'Tugas', 'Umur', 'Tanggal Lahir', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
            $no = 1;
            
            $dataPetugas = [];
            foreach ($petugas as $petugasData) {
                $btnEdit = '<a href="' . route('petugas.edit', $petugasData->id) . '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit" ><i class="fa fa-lg fa-fw fa-pen"></i></a>';
                $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" type="submit" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></button>';
                $btnDetails = '<a href="' . route('petugas.show', $petugasData->id) . '" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>';
                $dataPetugas[] = [$no++, $petugasData->nomor_petugas, $petugasData->nama_petugas, $petugasData->tugas_petugas, $petugasData->umur_petugas, $petugasData->tanggal_lahir, '<form onsubmit="return confirm(\'Apa Kah Anda Yakin?\')" class="d-flex justify-content-center" method="POST" action="' . route('petugas.destroy', $petugasData->id) . '">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"/>' . $btnEdit . $btnDelete . $btnDetails . '</form></nobr>'];
            }
            
            $config = [
                'data' => $dataPetugas,
                'order' => [[1, 'asc']],
                'columns' => [null, null, null, ['orderable' => false]],
            ];
        @endphp

        <x-adminlte-datatable id="table1" head-theme="navbar navbar-dark bg-primary" :heads="$heads">
            @foreach ($config['data'] as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td>{!! $cell !!}</td>
                    @endforeach
                </tr>
            @endforeach
        </x-adminlte-datatable>
        {{-- End Table Petugas --}}
    </div>
@endsection
