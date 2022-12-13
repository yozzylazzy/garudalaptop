@extends('master')
@section('title', 'Laporan Lama Pegawai Bekerja (Tahun)')

@section('content')
<div class="container-lg mt-4">
    <div class="text-center">
        <h2>LAPORAN LAMA PEGAWAI BEKERJA (TAHUN)</h2>
    </div>
    <hr>
    <div class="row mt-2 row-cols-1 row-cols-xl-3 g-4">
        <table class="table table-white table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>IDADMIN</th>
                    <th>NAMA PEGAWAI</th>
                    <th>JABATAN</th>
                    <th>LAMA BEKERJA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_lap2 as $lap2)
                <tr>
                    <td style="text-align:center">{{$lap2->IDADMIN}}</td>
                    <td>{{$lap2->nama}}</td>
                    <td>{{$lap2->jabatan}}</td>
                    <td style="text-align:center">{{ $lap2->tahun}} Tahun</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{-- {{ $data_lap1->withQueryString()->links() }} --}}
    </div>
</div>
@endsection