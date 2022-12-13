@extends('master')
@section('title', 'Tambah Penjualan')
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
    <div class="mt-4">
        <h2>{{ __('form4.title')}}</h2>
    </div>
    <hr>
    <form method="post" action="/savepenjualan">
        @csrf
        <input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
            <label for="NIK" class="form-label">{{__('form4.input.NIK')}}</label>
            <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="NIK" name="NIK"
                value="{{old('NIK')}}">
            @error('NIK')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="IDAdmin" class="form-label">{{__('form4.input.IDAdmin')}}</label>
            <input type="text" class="form-control @error('IDAdmin') is-invalid @enderror" id="IDAdmin" name="IDAdmin"
                value="{{old('IDAdmin')}}">
            @error('IDAdmin')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="row mb-3">
            <div class="col-sm-6">
                <label for="tglpembelian" class="form-label">{{__('form4.input.tglpembelian')}}</label>
                <input type="date" class="form-control @error('tglpembelian') is-invalid @enderror" id="tglpembelian"
                    name="tglpembelian" value="{{old('tglpembelian')}}">
                @error('tglpembelian')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <label for="metodepembayaran" class="form-label">{{__('form4.input.metode')}}</label>
                <select class="form-select" aria-label="{{__('form4.input.metode')}}" id="metodepembayaran"
                    name="metodepembayaran">
                    <option value="Debit">{{__('form4.input.pilihan_kategori.1')}}</option>
                    <option value="OVO">{{__('form4.input.pilihan_kategori.2')}}</option>
                    <option value="GOPAY">{{__('form4.input.pilihan_kategori.3')}}</option>
                    <option value="Kredit">{{__('form4.input.pilihan_kategori.4')}}</option>
                    <option value="QRIS">{{__('form4.input.pilihan_kategori.5')}}</option>
                    <option value="DANA">{{__('form4.input.pilihan_kategori.6')}}</option>
                    <option value="Transfer">{{__('form4.input.pilihan_kategori.7')}}</option>
                    <option value="Tunai">{{__('form4.input.pilihan_kategori.8')}}</option>
                </select>
            </div>
        </div>
        @include('tambahdetailpenjualan')
        <div class="d-grid gap-3 mt-4 mb-3">
            <button class="btn btn-primary mb-2" type="submit">{{__('form4.input.tombol1')}}</button>
            <button class="btn btn-secondary mb-2" type="reset">{{__('form4.input.tombol2')}}</button>
        </div>
    </form>
    <a href="/createpenjualan/en">English</a> |
    <a href="/createpenjualan">Indonesia</a>
</div>
@endsection