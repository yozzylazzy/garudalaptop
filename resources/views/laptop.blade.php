@extends('master')
@section('title', 'Data Laptop')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-8 col-sm-6">
            <h2>DATA LAPTOP</h2>
        </div>
        <div class="col-lg-4 col-sm-6">
            <form class="d-flex" type="GET" style="display: inline-block;" action="{{route('carilaptop')}}">
                <input class="form-control" type="search" id="search" name="search"
                    placeholder="Cari Berdasarkan Nama Laptop" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <hr>
    <a href="/createlaptop" class="btn btn-primary mb-3">{{ __('form3.title') }}</a>
    <div class="row">
        @foreach ($data_laptop as $laptop)
        <div class="col-xl-4 col-md-6 col-sm-12 d-flex align-items-stretch">
            <div class="shadow mb-3 bg-white rounded">
                <div class="card h-100" style="width: 25vw; max-width: 25vw; min-width: 22em;">
                    <img src=@php if ($laptop->linkgambar == null) {
                    echo "https://i.pinimg.com/originals/4a/70/5e/4a705e028bb9f5d50995e68c791fb10a.gif";
                    } else {
                    echo $laptop->linkgambar;
                    }
                    @endphp
                    class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$laptop->namalaptop}}</h5>
                        <h6 class="card-subtitle text-muted">{{$laptop->merklaptop}}</h6>
                        <BR> Harga Laptop : {{$laptop->harga}}
                        <BR> Processor : {{$laptop->cpu}}
                        <BR> Graphics : {{$laptop->gpu}}</p>

                    </div>
                    <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('ubahlaptop', $laptop->IDLaptop)}}">
                            <button class="btn btn-primary btn-md"
                                style=" vertical-align: middle; font-size: 1em;"><span class="material-symbols-outlined"
                                    style="vertical-align: baseline; font-size: 1.3em;">
                                    edit_square
                                </span> {{ __('table.table.tombol1') }}</button></a>
                        <form action="{{route('hapuslaptop', $laptop->IDLaptop)}}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-md" style="vertical-align: middle; font-size: 1.1em;"
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
        {{ $data_laptop->withQueryString()->links() }}
    </div>
</div>
@endsection