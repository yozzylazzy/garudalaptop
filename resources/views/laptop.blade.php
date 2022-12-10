@extends('master')
@section('title', 'Data Laptop')

@section('content')
<div class="container mt-3">
    <div class="text-center">
        <h2>DATA ADMIN</h2>
    </div>
    <form class="d-flex" style="display: inline-block;">
        <input class="form-control" type="search" placeholder="Cari Berdasarkan Nama Admin" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <hr>
    <div class="row">
        @foreach ($data_admin as $admin)
        <div class="col-4 d-flex align-items-stretch">
            <div class="shadow mb-3 bg-white rounded">
                <div class="card">
                    <img src=@php if($admin->kodegender == "P"){
                    echo "https://i.pinimg.com/originals/96/26/62/962662ea1f3741e2b18e3da800fdeec6.gif";
                    }else{
                    echo
                    "https://steamuserimages-a.akamaihd.net/ugc/929300849226077615/E5DDB9609D5CC455AD775EB27AF450C75C1F63B6/?imw=512&imh=282&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true";
                    }
                    @endphp
                    class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$admin->nama}}</h5>
                        <h6 class="card-subtitle text-muted">{{$admin->jabatan}}</h6>
                        <BR> Alamat : {{$admin->alamat}}
                        <BR> Telephone : {{$admin->notelp}}
                        <BR> Gabung : {{$admin->created_at}}</p>

                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection