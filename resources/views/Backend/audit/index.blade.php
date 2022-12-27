@extends('adminlte::page')
@extends('css.card')


@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mb-3 mt-3">Halaman Audit</p>
    </div>

    <div class="my_card">
        {{-- Table Audit --}}
        @php
            $heads = [['label' => 'No', 'no-export' => true, 'width' => 5], 'Nama', 'Event', 'Nilai Lama', 'Nilai Baru', 'URL', 'Tanggal', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
            $no = 1;
            
            $dataAudit = [];
            
            foreach ($audit as $audit) {
                $oldValues = '';
                $newValues = '';
                $countOldValues = count(json_decode($audit->old_values, true));
                $countNewValues = count(json_decode($audit->new_values, true));
                $user = $audit->user_type;
            
                if ($countOldValues <= 0) {
                    $oldValues .= '-';
                } elseif ($countOldValues >= 4) {
                    $oldValues .= 'Data lebih dari 4';
                } else {
                    foreach (json_decode($audit->old_values) as $key => $value) {
                        $oldValues .= $key . ':' . $value . '<br/>';
                    }
                }
            
                if ($countNewValues <= 0) {
                    $newValues .= '-';
                } elseif ($countNewValues >= 4) {
                    $newValues .= 'Data lebih dari 4';
                } else {
                    foreach (json_decode($audit->new_values) as $key => $value) {
                        $newValues .= $key . ': ' . $value . '<br/>';
                    }
                }
            
                $btnDetails = auth()
                    ->user()
                    ->can('show-audit')
                    ? '<a href="' . route('audit.show', $audit->id) . '" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>'
                    : '';
            
                $dataAudit[] = [$no++, $user::find($audit->user_id)->name, $audit->event, $oldValues, $newValues, $audit->url, $audit->created_at, '<form class="d-flex justify-content-center" >' . $btnDetails . '</form>'];
            }
            
            $config = [
                'data' => $dataAudit,
                'order' => [[1, 'asc']],
                'columns' => [null, null, null, ['orderable' => false]],
            ];
        @endphp

        {{-- Minimal example / fill data using the component slot --}}
        <x-adminlte-datatable id="table1" head-theme="navbar navbar-dark bg-primary" :heads="$heads">
            @foreach ($config['data'] as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td>{!! $cell !!}</td>
                    @endforeach
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
@endsection
