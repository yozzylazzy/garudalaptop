<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\DetilPenjualan;

class DetailPenjualanController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    // public function search(Request $request)
    // {
    //     $search = $request->post('search');
    //     $data_admin = DB::table('table_admin')->where('nama', 'like', '%' . $search . '%')->paginate(9);
    //     return view('admin', ['data_admin' => $data_admin]);
    // }

    public function getDetailPenjualanAll(Request $req, $id)
    {
        App::setLocale($req->locale);
        $datadetail = DB::table('table_detil_penjualan')->join('table_laptop', 'table_detil_penjualan.IDLaptop', '=', 'table_laptop.IDLaptop')
        ->select('table_detil_penjualan.*', 'table_laptop.namalaptop as namalaptop', 'table_laptop.harga as harga', 'table_laptop.linkgambar as linkgambar')
        ->where('IDTransaksi',  $id)->paginate(9);
        return view('detailpembelian', compact('datadetail'), ["locale" => $req->locale]);
    }

}
