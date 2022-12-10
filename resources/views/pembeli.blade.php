@extends('master')
@section('title', 'Data Pembeli')

@section('content')
<div class="container-lg mt-4">
    <div class="row">
        <div class="col-lg-8 col-sm-6">
            <h2>DATA PEMBELI</h2>
        </div>
        <div class="col-lg-4 col-sm-6">
            <form class="d-flex" type="post" style="display: inline-block;" action="{{url('/search')}}">
                <input class="form-control" type="search" id="search" name="search"
                    placeholder="Cari Berdasarkan Nama Pembeli" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <hr>
    <a href="/createadmin" class="btn btn-primary mb-3">{{ __('form.title') }}</a>
    <div class="row row-cols-1 row-cols-xl-3 g-4">
        @foreach ($data_pembeli as $pembeli)
        <div class="col-xl-4 d-flex align-items-stretch">
            <div class="shadow mb-3 bg-white rounded">
                <div class="card h-100" style="width: 25em; max-width: 25em;">
                    <img src=@php if($pembeli->kodegender == "P"){
                    echo "https://cdn.dribbble.com/users/2520294/screenshots/7269423/media/8db02365a1363822ae9f0554cf3d4469.gif";
                    }else{
                    echo
                    "https://cdn.dribbble.com/users/1047273/screenshots/6515762/01-pinssm.gif";
                    }
                    @endphp
                    class="card-img-top" alt="pic">
                    <div class="card-body">
                        <h5 class="card-title">{{$pembeli->nama}}</h5>
                        <h6 class="@php if($pembeli->jabatan == "Direktur"){
                            echo "badge bg-danger";
                            }else if($pembeli->jabatan == "Manager"){
                            echo "badge bg-success";
                            }else if($pembeli->jabatan == "Staff"){
                            echo "badge bg-warning";
                            }else{
                            echo "badge bg-primary";
                            }
                            @endphp">{{$pembeli->jabatan}}</h6>
                        <BR> Alamat : {{$pembeli->alamat}}
                        <BR> Telephone : {{$pembeli->notelp}}
                        <BR> Gabung : {{$pembeli->created_at}}</p>

                    </div>
                    <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('ubahpembeli', $pembeli->IDpembeli)}}">
                            <button class="btn btn-primary btn-md" style=" vertical-align: middle; font-size: 1em;"><span
                                    class="material-symbols-outlined" style="vertical-align: baseline; font-size: 1.3em;">
                                    edit_square
                                </span> {{ __('table.table.tombol1') }}</button></a>
                        <form action="{{route('hapuspembeli', $pembeli->IDpembeli)}}" method="post">
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
        {{ $data_pembeli->links() }}
    </div>
</div>
@endsection