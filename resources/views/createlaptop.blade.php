@extends('master')
@section('title', 'Tambah Laptop')
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
    <h2>{{ __('form3.title') }}</h2>
    <hr>
    <form method="post" action="/savelaptop">
        @csrf
        <input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
            <label for="namalaptop" class="form-label">{{__('form3.input.namalaptop')}}</label>
            <input type="text" class="form-control @error('namalaptop') is-invalid @enderror" id="namalaptop"
                name="namalaptop" value="{{old('namalaptop')}}" placeholder="Nama Lengkap Laptop">
            @error('namalaptop')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="">
                    <label for="merklaptop" class="form-label">{{__('form3.input.merklaptop')}}</label>
                    <select class="form-select" aria-label="{{__('form3.input.merklaptop')}}" id="merklaptop" name="merklaptop">
                        <option value="ASUS">ASUS</option>
                        <option value="ACER">ACER</option>
                        <option value="HP">HP</option>
                        <option value="LENOVO">LENOVO</option>
                        <option value="AXIOO">AXIOO</option>
                    </select>
                    @error('merklaptop')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="">
                    <label for="harga" class="form-label">{{__('form3.input.harga')}}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp </div>
                        </div>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                            name="harga" value="{{old('harga')}}" placeholder="Harga Laptop (Dalam Rupiah)">
                    </div>
                    @error('harga')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="cpu" class="form-label">{{__('form3.input.cpu')}}</label>
            <input type="text" class="form-control @error('cpu') is-invalid @enderror" id="cpu" name="cpu"
                value="{{old('cpu')}}" placeholder="Nama CPU/Processor Laptop">
            @error('cpu')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="gpu" class="form-label">{{__('form3.input.gpu')}}</label>
            <input type="text" class="form-control @error('gpu') is-invalid @enderror" id="gpu" name="gpu"
                value="{{old('gpu')}}" placeholder="Nama GPU/Graphic Processor Laptop">
            @error('gpu')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="">
                    <label for="ram" class="form-label">{{__('form3.input.ram')}}</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control @error('ram') is-invalid @enderror" id="ram" name="ram"
                            value="{{old('ram')}}">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> GB</div>
                        </div>
                    </div>
                    @error('ram')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="">
                    <label for="disk" class="form-label">{{__('form3.input.disk')}}</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control @error('disk') is-invalid @enderror" id="disk"
                            name="disk" value="{{old('disk')}}">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> GB</div>
                        </div>

                    </div>
                    @error('disk')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="">
                    <label for="batterycapacity" class="form-label">{{__('form3.input.batterycapacity')}}</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control @error('batterycapacity') is-invalid @enderror"
                            id="batterycapacity" name="batterycapacity" value="{{old('batterycapacity')}}">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> Wh</div>
                        </div>
                    </div>
                    @error('batterycapacity')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="">
            <label for="imagelink" class="form-label">{{__('form3.input.linkgambar')}}</label>
            <input type="text" class="form-control" id="imagelink" name="linkgambar" value="{{old('linkgambar')}}"
                placeholder="Link Gambar Laptop (Opsional)">
        </div>
        <div class="d-grid gap-3 mt-4 mb-3">
            <button class="btn btn-primary mb-2" type="submit">{{__('form3.input.tombol1')}}</button>
            <button class="btn btn-secondary mb-2" type="reset">{{__('form3.input.tombol2')}}</button>
        </div>
    </form>
    <a href="/createlaptop/en">English</a> |
    <a href="/createlaptop">Indonesia</a>
</div>
@endsection