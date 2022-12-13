@extends('master')
@section('title', 'Rekap Jumlah Transaksi Berdasarkan Metode Pembayaran')

@section('content')
<div class="container-lg mt-4">
    <div class="text-center">
        <h2>REKAP JUMLAH TRANSAKSI <BR> BERDASARKAN METODE PEMBAYARAN</h2>
    </div>
    <hr>
    <div class="row row-cols-1 row-cols-xl-3 g-4">
        <table class="table table-white table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>METODE PEMBAYARAN</th>
                    <th>JUMLAH TRANSAKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_lap7 as $lap7)
                <tr>
                    <td style="text-align:center">{{$lap7->metodepembayaran}}</td>
                    <td style="text-align:center">{{$lap7->jumlah}}x Transaksi</td>
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