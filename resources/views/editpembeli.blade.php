@extends('master')
@section('title', 'Edit Pembeli')
@section('content')
<div class="container mb-3 mt-4">
    @if(Session::has('pesan'))
    <div class="alert alert-danger">
        {{Session::get('pesan')}}</div>
    @endif
    <div class="mt-4">
        <h2>Edit Client Data</h2>
    </div>
    <hr>
    <form method="post" action="{{route('modifpembeli', $pembeli->NIK)}}">
        @csrf
        <input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
            <label for="NIK" class="form-label">NIK</label>
            <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="NIK" name="NIK"
                value="{{$pembeli->NIK}}" placeholder="Nomor Induk Kependudukan" disabled>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="nama" class="form-label">{{__('form2.input.nama')}}</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    value="{{$pembeli->nama}}">
                @error('nama')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <label for="notelp" class="form-label">{{__('form2.input.notelp')}}</label>
                <input type="text" class="form-control @error('notelp') is-invalid @enderror" id="notelp" name="notelp"
                    value="{{$pembeli->notelp}}">
                @error('notelp')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="alamat" class="form-label">{{__('form2.input.alamat')}}</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                value="{{$pembeli->alamat}}">
            @error('alamat')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">{{__('form2.input.kategori')}}</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="kodegender" value="P" @php
                    if($pembeli->kodegender == 'P') echo 'checked';
                @endphp>
                <label class="form-check-label" for="radio1">{{__('form2.input.pilihan_kategori.laki-laki')}}</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="kodegender" value="W" @php
                    if($pembeli->kodegender == 'W') echo 'checked';
                @endphp>
                <label class="form-check-label" for="radio2">{{__('form2.input.pilihan_kategori.perempuan')}}</label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="tgllahir" class="form-label">{{__('form2.input.tgllahir')}}</label>
                <input type="date" class="form-control @error('tgllahir') is-invalid @enderror" id="tgllahir"
                    name="tgllahir" value="{{$pembeli->tgllahir}}">
                @error('tgllahir')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <label for="pekerjaan" class="form-label">{{__('form2.input.pekerjaan')}}</label>
                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan"
                    name="pekerjaan" value="{{$pembeli->pekerjaan}}">
                @error('pekerjaan')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="d-grid gap-3 mt-4 mb-3">
            <button class="btn btn-primary mb-2" type="submit">{{__('form.input.tombol1')}}</button>
            <button class="btn btn-secondary mb-2" type="reset">{{__('form.input.tombol2')}}</button>
        </div>
    </form>
    <a href="/editpembeli/{{$pembeli->NIK}}/en">English</a> |
    <a href="/editpembeli/{{$pembeli->NIK}}/id">Indonesia</a>
</div>
@endsection