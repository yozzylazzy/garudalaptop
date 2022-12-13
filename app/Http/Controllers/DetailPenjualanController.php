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
        $datadetail = DB::table('table_detil_penjualan')->where('IDTransaksi',  $id)->paginate(9);
        return view('detailpembelian', compact('datadetail'), ["locale" => $req->locale]);
    }

   
    // public function editadmin(Request $req, $id)
    // {
    //     App::setLocale($req->locale);
    //     $admin = Admin::find($id);
    //     return view('editadmin', compact('admin'), ["locale" => $req->locale]);
    // }

    // public function updateadmin(Request $request, $id)
    // {
    //     App::setLocale($request->locale);
    //     $this->validate($request, [
    //         'nama' => 'required|string',
    //         'notelp' => 'required|string',
    //         'kodegender' => 'required|string|size:1',
    //         'jabatan' => 'required|string',
    //         'alamat' => 'required|string',
    //     ]);
    //     $data_admin = Admin::find($id);
    //     $data_admin->nama = $request->nama;
    //     $data_admin->notelp = $request->notelp;
    //     $data_admin->kodegender = $request->kodegender;
    //     $data_admin->jabatan = $request->jabatan;
    //     $data_admin->alamat = $request->alamat;
    //     $data_admin->update();
    //     return redirect('/admin')->with('success', 'Data Admin Berhasil Diubah');
    // }

    // public function deladmin($id)
    // {
    //     $data_admin = Admin::find($id);
    //     $data_admin->delete();
    //     return redirect('/admin')->with('success', 'Data Admin Berhasil Dihapus');
    // }
}
