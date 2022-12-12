@extends('master')
@section('title', 'Tambah Laptop')
@section('content')
<div class="container mb-3 mt-3">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2>{{ __('form3.title') }}</h2>
    <form method="post" action="/savelaptop">
        @csrf
        <input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
            <label for="namalaptop" class="form-label">{{__('form3.input.namalaptop')}}</label>
            <input type="text" class="form-control @error('namalaptop') is-invalid @enderror" id="namalaptop" name="namalaptop"
                value="{{old('namalaptop')}}">
            @error('namalaptop')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="harga" class="form-label">{{__('form3.input.harga')}}</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                value="{{old('harga')}}">
            @error('harga')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">{{__('form3.input.merklaptop')}}</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="merklaptop" value="ASUS">
                <label class="form-check-label" for="radio1">ASUS</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="merklaptop" value="ACER">
                <label class="form-check-label" for="radio2">ACER</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio3" name="merklaptop" value="HP">
                <label class="form-check-label" for="radio3">HP</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio4" name="merklaptop" value="LENOVO">
                <label class="form-check-label" for="radio4">LENOVO</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio5" name="merklaptop" value="AXIOO">
                <label class="form-check-label" for="radio5">AXIOO</label>
            </div>
            @error('merklaptop')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="cpu" class="form-label">{{__('form3.input.cpu')}}</label>
            <input type="text" class="form-control @error('cpu') is-invalid @enderror" id="cpu" name="cpu"
                value="{{old('cpu')}}">
            @error('cpu')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="gpu" class="form-label">{{__('form3.input.gpu')}}</label>
            <input type="text" class="form-control @error('gpu') is-invalid @enderror" id="gpu" name="gpu"
                value="{{old('gpu')}}">
            @error('gpu')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="ram" class="form-label">{{__('form3.input.ram')}}</label>
            <input type="text" class="form-control @error('ram') is-invalid @enderror" id="ram" name="ram"
                value="{{old('ram')}}">
            @error('ram')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="disk" class="form-label">{{__('form3.input.disk')}}</label>
            <input type="text" class="form-control @error('disk') is-invalid @enderror" id="disk" name="disk"
                value="{{old('disk')}}">
            @error('disk')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="batterycapacity" class="form-label">{{__('form3.input.batterycapacity')}}</label>
            <input type="text" class="form-control @error('batterycapacity') is-invalid @enderror" id="batterycapacity" name="batterycapacity"
                value="{{old('batterycapacity')}}">
            @error('batterycapacity')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="imagelink" class="form-label">{{__('form3.input.linkgambar')}}</label>
            <input type="text" class="form-control" id="imagelink"
                name="linkgambar" value="{{old('linkgambar')}}">
        </div>
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">{{__('form3.input.tombol1')}}</button>
            <button class="btn btn-success mb-2" type="reset">{{__('form3.input.tombol2')}}</button>
        </div>
    </form>
    <a href="/createadmin/en">English</a> |
    <a href="/createadmin">Indonesia</a>
</div>
@endsection