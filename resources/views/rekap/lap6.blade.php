@extends('master')
@section('title', 'Rekap Jumlah Penjualan Oleh Pegawai')

@section('content')
<div class="container-lg mt-4">
    <div class="text-center">
        <h2>REKAP JUMLAH PENJUALAN OLEH PEGAWAI</h2>
    </div>
    <hr>
    <div class="row row-cols-1 row-cols-xl-3 g-4">
        <table class="table table-white table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID PEGAWAI</th>
                    <th>NAMA PEGAWAI</th>
                    <th>JABATAN</th>
                    <th>JUMLAH PENJUALAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_lap6 as $lap6)
                <tr>
                    <td style="text-align:center">{{$lap6->IDAdmin}}</td>
                    <td style="text-align:center">{{$lap6->nama}}</td>
                    <td style="text-align:center">{{$lap6->jabatan}}</td>
                    <td style="text-align:center">{{$lap6->jumlah}} Unit</td>
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