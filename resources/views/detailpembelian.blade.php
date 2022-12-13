@extends('master')
@section('title', 'Data Detail Pembelian')

@section('content')
<div class="container-lg mt-4">
    <div class="text-center">
        <h2>DATA DETAIL PEMBELIAN</h2>
    </div>
    <hr>
    <div class="row mt-3 row-cols-1 row-cols-xl-3 g-4">
        @foreach ($datadetail as $data)
        <div class="col-xl-4 d-flex align-items-stretch">
            <div class="shadow mb-3 bg-white rounded">
                <div class="card h-100" style="width: 25em; max-width: 25em;">
                    <img src=@php if ($data->linkgambar == null) {
                    echo "https://i.pinimg.com/originals/4a/70/5e/4a705e028bb9f5d50995e68c791fb10a.gif";
                    } else {
                    echo $data->linkgambar;
                    }
                    @endphp
                    class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="badge bg-primary">⭐ TS0000000{{$data->IDTransaksi}}</h5>
                        <BR>Nama Laptop : {{$data->namalaptop}}
                        <BR>Harga : Rp {{number_format($data->harga,0)}}
                        <BR>Jumlah Laptop Dibeli : {{$data->jumlah}} Unit
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