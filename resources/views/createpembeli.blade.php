@extends('master')
@section('title', 'Tambah Pembeli')
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
    <h2>{{ __('form2.title') }}</h2>
    <form method="post" action="/savepembeli">
        @csrf
        <input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
            <label for="nama" class="form-label">{{__('form2.input.nama')}}</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                value="{{old('nama')}}">
            @error('nama')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="alamat" class="form-label">{{__('form2.input.alamat')}}</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                value="{{old('alamat')}}">
            @error('alamat')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="notelp" class="form-label">{{__('form2.input.notelp')}}</label>
            <input type="text" class="form-control @error('notelp') is-invalid @enderror" id="notelp" name="notelp"
                value="{{old('notelp')}}">
            @error('notelp')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">{{__('form2.input.kategori')}}</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="kodegender" value="P" checked>
                <label class="form-check-label" for="radio1">{{__('form2.input.pilihan_kategori.laki-laki')}}</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="kodegender" value="W">
                <label class="form-check-label" for="radio2">{{__('form2.input.pilihan_kategori.perempuan')}}</label>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="pekerjaan" class="form-label">{{__('form2.input.pekerjaan')}}</label>
            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan"
                value="{{old('pekerjaan')}}">
            @error('pekerjaan')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="tgllahir" class="form-label">{{__('form2.input.tgllahir')}}</label>
            <input type="date" class="form-control @error('tgllahir') is-invalid @enderror" id="tgllahir" name="tgllahir"
                value="{{old('tgllahir')}}">
            @error('tgllahir')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">{{__('form2.input.tombol1')}}</button>
            <button class="btn btn-success mb-2" type="reset">{{__('form2.input.tombol2')}}</button>
        </div>
    </form>
    <a href="/createpembeli/en">English</a> |
    <a href="/createpembeli">Indonesia</a>
</div>
@endsection