@extends('master')
@section('title', 'Tambah Laptop')
@section('content')
<div class="container mb-3 mt-4">
    @if(Session::has('pesan'))
    <div class="alert alert-danger">
        {{Session::get('pesan')}}</div>
    @endif
    <h2>Edit Data Laptop\Notebook</h2>
    <hr>
    <form method="post" action="{{route('modiflaptop', $laptop->IDLaptop)}}">
        @csrf
        <input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
            <label for="idlaptop" class="form-label">ID Laptop\Notebook</label>
            <input type="text" class="form-control @error('idlaptop') is-invalid @enderror" id="idlaptop"
                name="idlaptop" value="{{$laptop->IDLaptop}}" readonly>
            @error('idlaptop')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="namalaptop" class="form-label">{{__('form3.input.namalaptop')}}</label>
            <input type="text" class="form-control @error('namalaptop') is-invalid @enderror" id="namalaptop"
                name="namalaptop" value="{{$laptop->namalaptop}}">
            @error('namalaptop')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="">
                    <label for="merklaptop" class="form-label">{{__('form3.input.merklaptop')}}</label>
                    <select class="form-select" aria-label="{{__('form3.input.merklaptop')}}" id="merklaptop"
                        name="merklaptop">
                        <option value="ASUS" 
                        @php
                        if($laptop->merklaptop == 'ASUS') echo 'selected';
                        @endphp>ASUS</option>
                        <option value="ACER" 
                        @php
                        if($laptop->merklaptop == 'ACER') echo 'selected';
                        @endphp>ACER</option>
                        <option value="HP"
                        @php
                        if($laptop->merklaptop == 'HP') echo 'selected';
                        @endphp>HP</option>
                        <option value="LENOVO"
                        @php
                        if($laptop->merklaptop == 'LENOVO') echo 'selected';
                        @endphp>LENOVO</option>
                        <option value="AXIOO"
                        @php
                        if($laptop->merklaptop == 'AXIOO') echo 'selected';
                        @endphp>AXIOO</option>
                    </select>
                    @error('merklaptop')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <label for="harga" class="form-label">{{__('form3.input.harga')}}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp </div>
                    </div>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                      value="{{$laptop->harga}}">
                </div>
                @error('harga')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="cpu" class="form-label">{{__('form3.input.cpu')}}</label>
            <input type="text" class="form-control @error('cpu') is-invalid @enderror" id="cpu" name="cpu"
                value="{{$laptop->cpu}}">
            @error('cpu')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="gpu" class="form-label">{{__('form3.input.gpu')}}</label>
            <input type="text" class="form-control @error('gpu') is-invalid @enderror" id="gpu" name="gpu"
                value="{{$laptop->gpu}}">
            @error('gpu')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="ram" class="form-label">{{__('form3.input.ram')}}</label>
                <div class="input-group">
                    <input type="text" class="form-control @error('ram') is-invalid @enderror" id="ram" name="ram"
                        value="{{$laptop->ram}}">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> GB</div>
                    </div>
                </div>
                @error('ram')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label for="disk" class="form-label">{{__('form3.input.disk')}}</label>
                <div class="input-group">
                    <input type="text" class="form-control @error('disk') is-invalid @enderror" id="disk" name="disk"
                        value="{{$laptop->disk}}">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> GB</div>
                    </div>
                </div>
                @error('disk')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label for="batterycapacity" class="form-label">{{__('form3.input.batterycapacity')}}</label>
                <div class="input-group">
                    <input type="text" class="form-control @error('batterycapacity') is-invalid @enderror"
                        id="batterycapacity" name="batterycapacity" value="{{$laptop->batterycapacity}}">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Wh</div>
                    </div>
                </div>
                @error('batterycapacity')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="imagelink" class="form-label">{{__('form3.input.linkgambar')}}</label>
            <input type="text" class="form-control" id="imagelink" name="linkgambar" value="{{$laptop->linkgambar}}">
        </div>
        <div class="d-grid gap-3 mt-4 mb-3">
            <button class="btn btn-primary mb-2" type="submit">{{__('form3.input.tombol1')}}</button>
            <button class="btn btn-secondary mb-2" type="reset">{{__('form3.input.tombol2')}}</button>
        </div>
    </form>
    <a href="/editlaptop/{{$laptop->IDLaptop}}/en">English</a> |
    <a href="/editlaptop/{{$laptop->IDLaptop}}/id">Indonesia</a>
</div>
@endsection