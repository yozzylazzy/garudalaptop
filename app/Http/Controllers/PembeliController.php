<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->post('search');
        $data_pembeli = DB::table('table_pembeli')->where('nama', 'like', '%' . $search . '%')->paginate(3);
        return view('pembeli', ['data_pembeli' => $data_pembeli]);
    }

    public function getPembeliAll($locale = 'id')
    {
        App::setLocale($locale);
        $data_pembeli = Pembeli::orderBy('NIK', 'asc')->paginate(3);
        return view('pembeli', compact('data_pembeli'));
    }
    public function getOnePembeli($request)
    {
        $data_pembeli = Pembeli::find($request);
        return view('pembeli', compact('data_pembeli'));
    }

    public function createpembeli($locale = 'id')
    {
        App::setLocale($locale);
        return view('createpembeli', ["locale" => $locale]);
    }

    public function savepembeli(Request $request)
    {
        App::setLocale($request->locale);
        $this->validate($request, [
            'nama' => 'required|string',
            'notelp' => 'required|string',
            'kodegender' => 'required|string|size:1',
            'alamat' => 'required|string',
        ]);
        $data_pembeli = new Pembeli();
        $data_pembeli->nama = $request->nama;
        $data_pembeli->notelp = $request->notelp;
        $data_pembeli->kodegender = $request->kodegender;
        $data_pembeli->alamat = $request->alamat;
        $data_pembeli->save();
        return redirect('/pembeli')->with('success', 'Data Pembeli Berhasil Ditambahkan');
    }

    public function editpembeli(Request $req, $id)
    {
        App::setLocale($req->locale);
        $data_pembeli = Pembeli::find($id);
        return view('editpembeli', compact('data_pembeli'), ["locale" => $req->locale]);
    }

    public function updateadmin(Request $request, $id)
    {
        App::setLocale($request->locale);
        $this->validate($request, [
            'nama' => 'required|string',
            'notelp' => 'required|string',
            'kodegender' => 'required|string|size:1',
            'alamat' => 'required|string',
        ]);
        $data_pembeli = Pembeli::find($id);
        $data_pembeli->nama = $request->nama;
        $data_pembeli->notelp = $request->notelp;
        $data_pembeli->kodegender = $request->kodegender;
        $data_pembeli->alamat = $request->alamat;
        $data_pembeli->save();
        return redirect('/pembeli')->with('success', 'Data Pembeli Berhasil Diubah');
    }

    public function deladmin($id)
    {
        $data_pembeli = Pembeli::find($id);
        $data_pembeli->delete();
        return redirect('/pembeli')->with('success', 'Data Pembeli Berhasil Dihapus');
    }
}
