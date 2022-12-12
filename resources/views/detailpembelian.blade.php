@extends('master')
@section('title', 'Data Detail Pembelian')

@section('content')
<div class="container-lg mt-4">
    <div class="row">
        <div class="col-lg-8 col-sm-6">
            <h2>DATA DETAIL PEMBELIAN</h2>
        </div>
        <div class="col-lg-4 col-sm-6">
            <form class="d-flex" type="post" style="display: inline-block;" action="{{url('/search')}}">
                <input class="form-control" type="search" id="search" name="search"
                    placeholder="Cari Berdasarkan IDLaptop" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <hr>
    <a href="/createpenjualan" class="btn btn-primary mb-3">{{ __('form4.title') }}</a>
    <div class="row row-cols-1 row-cols-xl-3 g-4">
        @foreach ($datadetail as $data)
        <div class="col-xl-4 d-flex align-items-stretch">
            <div class="shadow mb-3 bg-white rounded">
                <div class="card h-100" style="width: 25em; max-width: 25em;">
                    <img src="https://cdn.dribbble.com/users/2212220/screenshots/5808617/media/338e3581cdac8d456f66473bc17c2d67.gif"
                        class="card-img-top" alt="pic">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->IDTransaksi}}</h5>
                        <h6 class="badge bg-primary">{{$data->IDLaptop}}</h6>
                        <BR> Jumlah Laptop Dibeli : {{$data->jumlah}}
                    </div>
                    <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary btn-md" style=" vertical-align: middle; font-size: 1em;"><span
                                class="material-symbols-outlined" style="vertical-align: baseline; font-size: 1.3em;">
                                edit_square
                            </span> {{ __('table.table.tombol1') }}</button></a>
                        <form action="#" method="post">
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
        {{ $datadetail->withQueryString()->links() }}
    </div>
</div>
@endsection