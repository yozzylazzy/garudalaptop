@extends('master')
@section('title', 'Rekap Jumlah Pembelian Per-Pelanggan')

@section('content')
<div class="container-lg mt-4">
    <div class="text-center">
        <h2>REKAP JUMLAH PEMBELIAN PER-PELANGGAN</h2>
    </div>
    <hr>
    <div class="row mt-2 row-cols-1 row-cols-xl-3 g-4">
        <table class="table table-bordered table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>NIK PEMBELI</th>
                    <th>NAMA PEMBELI</th>
                    <th>PEKERJAAN</th>
                    <th>TOTAL DIBELI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_lap8 as $lap8)
                <tr>
                    <td style="text-align:center">{{$lap8->NIK}}</td>
                    <td>{{$lap8->nama}}</td>
                    <td>{{$lap8->pekerjaan}}</td>
                    <td style="text-align:center">{{$lap8->jumlah}} Unit</td>
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