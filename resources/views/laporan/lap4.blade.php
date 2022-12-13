@extends('master')
@section('title', 'Laporan Jumlah Penjualan Per-Transaksi')

@section('content')
<div class="container-lg mt-4">
    <div class="text-center">
        <h2>LAPORAN JUMLAH PENJUALAN PER-TRANSAKSI</h2>
    </div>
    <hr>
    <div class="row mt-2 row-cols-1 row-cols-xl-3 g-4">
        <table class="table table-white table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID TRANSAKSI</th>
                    <th>NAMA PEMBELI</th>
                    <th>JUMLAH TERJUAL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_lap4 as $lap4)
                <tr>
                    <td style="text-align:center">{{$lap4->IDTransaksi}}</td>
                    <td style="text-align:center">{{$lap4->nama}}</td>
                    <td style="text-align:center">{{$lap4->jumlah}} Unit</td>
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