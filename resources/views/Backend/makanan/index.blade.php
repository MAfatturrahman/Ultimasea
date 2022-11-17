@extends('adminlte::page')
@extends('css.card')
@extends('css.img')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <a class="btn btn-success mb-3 mt-3" href="{{ route('makanan.create') }}">Tambah</a>
        <p class="btn btn-primary mb-3 mt-3">Halaman Makanan</p>
    </div>

    <div class="my_card" style="width: 100%; margin: auto;"><br>
        {{-- Table Makanan --}}
        @php
            $heads = [['label' => 'No', 'no-export' => true, 'width' => 1], 'Gambar', 'Nama', 'Harga', 'Toko', 'Deskripsi', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
            $no = 1;
            
            $dataMakanan = [];
            foreach ($makanan as $makananData) {
                $btnEdit = '<a href="' . route('makanan.edit', $makananData->id) . '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit" ><i class="fa fa-lg fa-fw fa-pen"></i></a>';
            
                $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" type="submit" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></button>';
            
                $btnDetails = '<a href="' . route('makanan.show', $makananData->id) . '" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>';
            
                $dataMakanan[] = [$no++, '<img src="' . $makananData->gambar_makanan . '">', $makananData->nama_makanan, $makananData->harga_makanan, $makananData->toko_makanan, $makananData->deskripsi_makanan, '<form onsubmit="return confirm(\'Apa Kah Anda Yakin?\')" class="d-flex justify-content-center" method="POST" action="' . route('makanan.destroy', $makananData->id) . '">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"/>' . $btnEdit . $btnDelete . $btnDetails . '</form></nobr>'];
            }
            
            $config = [
                'data' => $dataMakanan,
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
        {{-- End Table Makanan --}}
    </div>
@endsection
