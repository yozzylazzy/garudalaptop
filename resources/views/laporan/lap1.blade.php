@extends('master')
@section('title', 'Laporan Jumlah Pembelian Per-Pelanggan')

@section('content')
<div class="container-lg mt-4">
    <div class="text-center">
        <h2>LAPORAN JUMLAH PEMBELIAN PER-PELANGGAN</h2>
    </div>
    <hr>
    <div class="row row-cols-1 row-cols-xl-3 g-4">
        <table class="table table-bordered table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>NIK PEMBELI</th>
                    <th>NAMA PEMBELI</th>
                    <th>PEKERJAAN</th>
                    <th>TOTAL PEMBELIAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_lap1 as $lap1)
                <tr>
                    <td style="text-align:center">{{$lap1->NIK}}</td>
                    <td>{{$lap1->nama}}</td>
                    <td>{{$lap1->pekerjaan}}</td>
                    <td style="text-align:center">Rp {{ number_format($lap1->total,0)}}</td>
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