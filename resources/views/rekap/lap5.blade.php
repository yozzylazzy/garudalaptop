@extends('master')
@section('title', 'Rekap Jumlah Penjualan Per-Laptop')

@section('content')
<div class="container-lg mt-4">
    <div class="text-center">
        <h2>REKAP JUMLAH PENJUALAN PER-LAPTOP</h2>
    </div>
    <hr>
    <div class="row mt-2 row-cols-1 row-cols-xl-3 g-4">
        <table class="table table-white table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID LAPTOP</th>
                    <th>NAMA LAPTOP</th>
                    <th>HARGA</th>
                    <th>JUMLAH TERJUAL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_lap5 as $lap5)
                <tr>
                    <td style="text-align:center">{{$lap5->IDLaptop}}</td>
                    <td style="text-align:center">{{$lap5->namalaptop}}</td>
                    <td style="text-align:center">Rp {{number_format($lap5->harga,0)}}</td>
                    <td style="text-align:center">{{$lap5->jumlah}} Unit</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{-- {{ $data_lap1->withQueryString()->links() }} --}}
    </div>
</div>
@endsection