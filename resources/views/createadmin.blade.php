@extends('master')
@section('title', 'Tambah Admin')
@section('content')
<div class="container mb-3 mt-3">
    {{-- @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <h2>{{ __('form.title') }}</h2>
    <hr>
    <form method="post" action="/saveadmin">
        @csrf
        <input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
            <label for="nama" class="form-label">{{__('form.input.nama')}}</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                value="{{old('nama')}}" placeholder="Nama Lengkap Admin">
            @error('nama')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="notelp" class="form-label">{{__('form.input.notelp')}}</label>
            <input type="text" class="form-control @error('notelp') is-invalid @enderror" id="notelp" name="notelp"
                value="{{old('notelp')}}" placeholder="Nomor Telephone Aktif Admin">
            @error('notelp')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">{{__('form.input.kodegender')}}</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="kodegender" value="P" checked>
                <label class="form-check-label" for="radio1">{{__('form.input.pilihan_kategori.pria')}}</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="kodegender" value="W">
                <label class="form-check-label" for="radio2">{{__('form.input.pilihan_kategori.wanita')}}</label>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="jabatan" class="form-label">{{__('form.input.jabatan')}}</label>
            <select class="form-select" aria-label="{{__('form.input.jabatan')}}" id="jabatan" name="jabatan">
                <option value="Direktur">Direktur</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
            </select>
            @error('jabatan')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="alamat" class="form-label">{{__('form.input.alamat')}}</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                value="{{old('alamat')}}" placeholder="Alamat Aktif Admin">
            @error('alamat')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="d-grid gap-3 mt-4 mb-3">
            <button class="btn btn-primary mb-2" type="submit">{{__('form.input.tombol1')}}</button>
            <button class="btn btn-secondary mb-2" type="reset">{{__('form.input.tombol2')}}</button>
        </div>
    </form>
    <a href="/createadmin/en">English</a> |
    <a href="/createadmin">Indonesia</a>
</div>
@endsection