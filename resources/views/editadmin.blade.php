@extends('master')
@section('title', 'Edit Admin')
@section('content')
<div class="container mb-3 mt-3">
    @if(Session::has('pesan'))
    <div class="alert alert-danger">
        {{Session::get('pesan')}}</div>
    @endif
    <h2>Edit Data Admin</h2>
    <form method="post" action="{{route('modifadmin', $admin->IDAdmin)}}">
        @csrf
        <input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
            <label for="nama" class="form-label">{{__('form.input.nama')}}</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                value="{{$admin->nama}}">
            @error('nama')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="notelp" class="form-label">{{__('form.input.notelp')}}</label>
            <input type="text" class="form-control @error('notelp') is-invalid @enderror" id="notelp" name="notelp"
                value="{{$admin->notelp}}">
            @error('notelp')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">{{__('form.input.kodegender')}}</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="kodegender" value="P" @php
                    if($admin->kodegender == 'P') echo 'checked';
                @endphp>
                <label class="form-check-label" for="radio1">{{__('form.input.pilihan_kategori.pria')}}</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="kodegender" value="W" @php
                    if($admin->kodegender == 'W') echo 'checked';
                @endphp>
                <label class="form-check-label" for="radio2">{{__('form.input.pilihan_kategori.wanita')}}</label>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="jabatan" class="form-label">{{__('form.input.jabatan')}}</label>
            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan"
                value="{{$admin->jabatan}}">
            @error('jabatan')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="alamat" class="form-label">{{__('form.input.alamat')}}</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                value="{{$admin->alamat}}">
            @error('alamat')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">{{__('form.input.tombol1')}}</button>
            <button class="btn btn-success mb-2" type="reset">{{__('form.input.tombol2')}}</button>
        </div>
    </form>
    <a href="/createadmin/en">English</a> |
    <a href="/createadmin">Indonesia</a>
</div>
@endsection