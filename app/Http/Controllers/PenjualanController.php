<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        $search = $request->post('search');
        $data_penjualan = DB::table('table_penjualan')->where('NIK', 'like', '%' . $search . '%')->paginate(9);
        return view('penjualan', ['data_penjualan' => $data_penjualan]);
    }

    public function getPenjualanAll($locale = 'id')
    {
        App::setLocale($locale);
        $data_penjualan = Penjualan::orderBy('IDTransaksi', 'asc')->paginate(9);
        $data_penjualan = DB::table('table_penjualan')->join('table_admin', 'table_penjualan.IDAdmin', '=', 'table_admin.IDAdmin')->join('table_pembeli', 'table_penjualan.NIK', '=', 'table_pembeli.NIK')->select('table_penjualan.*', 'table_admin.nama as namaadmin', 'table_pembeli.nama')->paginate(9);
        return view('penjualan', compact('data_penjualan'));
    }
    public function getOnePenjualan($request)
    {
        $data_penjualan = Penjualan::find($request);
        return view('penjualan', compact('data_penjualan'));
    }

    public function createpenjualan($locale = 'id')
    {
        App::setLocale($locale);
        return view('createpenjualan', ["locale" => $locale]);
    }

    public function savepenjualan(Request $request)
    {
        App::setLocale($request->locale);
        $this->validate($request, [
            'NIK' => 'required|string',
            'IDAdmin' => 'required|string',
            'tglpembelian' => 'required|date',
            'metodepembayaran' => 'required|string',
        ]);
        $data_penjualan = new Penjualan();
        $data_penjualan->NIK = $request->NIK;
        $data_penjualan->IDAdmin = $request->IDAdmin;
        $data_penjualan->tglpembelian = $request->tglpembelian;
        $data_penjualan->metodepembayaran = $request->metodepembayaran;
        $data_penjualan->save();
        return redirect('/penjualan')->with('success', 'Data Penjualan Berhasil Ditambahkan');
    }

    public function editpenjualan(Request $req, $id)
    {
        App::setLocale($req->locale);
        $penjualan = Penjualan::find($id);
        return view('editpenjualan', compact('penjualan'), ["locale" => $req->locale]);
    }

    public function updatepenjualan(Request $request, $id)
    {
        App::setLocale($request->locale);
        $this->validate($request, [
            'NIK' => 'required|string',
            'IDAdmin' => 'required|string',
            'tglpembelian' => 'required|date',
            'metodepembayaran' => 'required|string',
        ]);
        $data_penjualan = new Penjualan();
        $data_penjualan->NIK = $request->NIK;
        $data_penjualan->IDAdmin = $request->IDAdmin;
        $data_penjualan->tglpembelian = $request->tglpembelian;
        $data_penjualan->metodepembayaran = $request->metodepembayaran;
        $data_penjualan->update();
        return redirect('/penjualan')->with('success', 'Data Penjualan Berhasil Diubah');
    }

    public function delpenjualan($id)
    {
        $data_penjualan = Penjualan::find($id);
        $data_penjualan->delete();
        return redirect('/penjualan')->with('success', 'Data Penjualan Berhasil Dihapus');
    }
}
