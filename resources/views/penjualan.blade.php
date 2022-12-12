@extends('master')
@section('title', 'Data Penjualan')

@section('content')
<div class="container-lg mt-4">
    <div class="row">
        <div class="col-lg-8 col-sm-6">
            <h2>DATA PENJUALAN</h2>
        </div>
        <div class="col-lg-4 col-sm-6">
            <form class="d-flex" type="GET" style="display: inline-block;" action="{{route('caritransaksi')}}">
                <input class="form-control" type="search" id="search" name="search"
                    placeholder="Cari Berdasarkan NIK Pembeli" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <hr>
    <a href="/createpenjualan" class="btn btn-primary mb-3">{{ __('form4.title') }}</a>
    <div class="row row-cols-1 row-cols-xl-3 g-4">
        @foreach ($data_penjualan as $penjualan)
        <div class="col-xl-4 col-md-6 col-sm-12 d-flex align-items-stretch">
            <div class="shadow mb-3 bg-white rounded">
                <div class="card h-100" style="width: 25vw; max-width: 25vw; min-width: 22em;">
                    <img src="https://img.freepik.com/premium-photo/3d-render-online-payment-concept-transaction-receipt-online-payment-icon_95505-317.jpg"
                        class="card-img-top" alt="pic">
                    <div class="card-body">
                        <h5 class="badge bg-primary">TS0000000{{$penjualan->IDTransaksi}}</h5>
                        <BR>Nama Pembeli : {{$penjualan->nama}}
                        <BR>Nama Kasir/Admin : {{$penjualan->namaadmin}}
                        <BR>Tanggal Transaksi : @php
                              $date = $penjualan->tglpembelian;
                              echo date('d-M-Y', strtotime($date));
                        @endphp
                        <BR>Metode Pembayaran : {{$penjualan->metodepembayaran}}
                    </div>
                    <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('detailpenjualan', $penjualan->IDTransaksi)}}">
                            <button class="btn btn-primary btn-md"
                                style=" vertical-align: middle; font-size: 1em;"><span class="material-symbols-outlined"
                                    style="vertical-align: baseline; font-size: 1.3em;">
                                    fact_check
                                </span> Detail</button></a>
                        <a href="{{route('ubahpenjualan', $penjualan->IDTransaksi)}}">
                            <button class="btn btn-primary btn-md"
                                style=" vertical-align: middle; font-size: 1em;"><span class="material-symbols-outlined"
                                    style="vertical-align: baseline; font-size: 1.3em;">
                                    edit_square
                                </span> {{ __('table.table.tombol1') }}</button></a>
                        <form action="{{route('hapuspenjualan', $penjualan->IDTransaksi)}}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-md" style="vertical-align: bottom; font-size: 1em;"
                                onClick="return confirm('{{__('table.modalbox.body')}}')"><span
                                    class="material-symbols-outlined" style="vertical-align: middle; font-size: 1.3em;">
                                    delete
                                </span> {{ __('table.table.tombol2')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $data_penjualan->withQueryString()->links() }}
    </div>
</div>
@endsection