@extends('master')
@section('title', 'Laporan Jumlah Pembelian Perbulan-Tahun')

@section('content')
<div class="container-lg mt-4">
    <div class="text-center">
        <h2>LAPORAN JUMLAH PEMBELIAN PERBULAN-TAHUN</h2>
    </div>
    <hr>
    <div class="row row-cols-1 row-cols-xl-3 g-4">
        <table class="table table-white table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>BULAN TAHUN</th>
                    <th>JUMLAH TERJUAL</th>
                    <th>TOTAL HARGA PENJUALAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_lap3 as $lap3)
                <tr>
                    <td style="text-align:center">{{$lap3->bulantahun}}</td>
                    <td style="text-align:center">{{$lap3->jumlah}} Buah</td>
                    <td style="text-align:center">Rp {{ number_format($lap3->total,0)}}</td>
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