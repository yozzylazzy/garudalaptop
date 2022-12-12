@extends('master')
@section('title', 'Tambah Laptop')
@section('content')
<div class="container mb-3 mt-3">
    @if(Session::has('pesan'))
    <div class="alert alert-danger">
        {{Session::get('pesan')}}</div>
    @endif
    <h2>Edit Data Laptop</h2>
    <form method="post" action="{{route('modiflaptop', $laptop->IDLaptop)}}">
        @csrf
        <input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
            <label for="namalaptop" class="form-label">{{__('form3.input.namalaptop')}}</label>
            <input type="text" class="form-control @error('namalaptop') is-invalid @enderror" id="namalaptop"
                name="namalaptop" value="{{$laptop->namalaptop}}">
            @error('namalaptop')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="harga" class="form-label">{{__('form3.input.harga')}}</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                value="{{$laptop->harga}}">
            @error('harga')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">{{__('form3.input.merklaptop')}}</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="merklaptop" value="ASUS" @php
                if($laptop->merklaptop == 'ASUS') echo 'checked' @endphp>
                <label class="form-check-label" for="radio1">ASUS</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="merklaptop" value="ACER" @php
                if($laptop->merklaptop == 'ACER') echo 'checked' @endphp>
                <label class="form-check-label" for="radio2">ACER</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio3" name="merklaptop" value="HP" @php
                if($laptop->merklaptop == 'HP') echo 'checked' @endphp>
                <label class="form-check-label" for="radio3">HP</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio4" name="merklaptop" value="LENOVO" @php
                if($laptop->merklaptop == 'LENOVO') echo 'checked' @endphp>
                <label class="form-check-label" for="radio4">LENOVO</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio5" name="merklaptop" value="AXIOO" @php
                if($laptop->merklaptop == 'AXIOO') echo 'checked' @endphp>
                <label class="form-check-label" for="radio5">AXIOO</label>
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
        <div class="mb-3 mt-3">
            <label for="ram" class="form-label">{{__('form3.input.ram')}}</label>
            <input type="text" class="form-control @error('ram') is-invalid @enderror" id="ram" name="ram"
                value="{{$laptop->ram}}">
            @error('ram')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="disk" class="form-label">{{__('form3.input.disk')}}</label>
            <input type="text" class="form-control @error('disk') is-invalid @enderror" id="disk" name="disk"
                value="{{$laptop->disk}}">
            @error('disk')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="batterycapacity" class="form-label">{{__('form3.input.batterycapacity')}}</label>
            <input type="text" class="form-control @error('batterycapacity') is-invalid @enderror" id="batterycapacity"
                name="batterycapacity" value="{{$laptop->batterycapacity}}">
            @error('batterycapacity')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="imagelink" class="form-label">{{__('form3.input.linkgambar')}}</label>
            <input type="text" class="form-control" id="imagelink"
                name="linkgambar" value="{{$laptop->linkgambar}}">
        </div>
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">{{__('form3.input.tombol1')}}</button>
            <button class="btn btn-success mb-2" type="reset">{{__('form3.input.tombol2')}}</button>
        </div>
    </form>
    <a href="/editlaptop/{{$laptop->IDLaptop}}/en">English</a> |
    <a href="/editlaptop/{{$laptop->IDLaptop}}/id">Indonesia</a>
</div>
@endsection