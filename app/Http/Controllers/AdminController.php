<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{


    public function index()
    {
        return view('admin');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $data_admin = DB::table('table_admin')->where('nama', 'like', '%' . $search . '%')->paginate(9);
        return view('admin')->with('data_admin', $data_admin);
    }

    public function getAdminAll($locale = 'id')
    {
        App::setLocale($locale);
        $data_admin = Admin::orderBy('IDAdmin', 'asc')->paginate(9);
        return view('admin', compact('data_admin'));
    }
    public function getOneAdmin($request)
    {
        $data_admin = Admin::find($request);
        return view('admin', compact('data_admin'));
    }

    public function createadmin($locale = 'id')
    {
        App::setLocale($locale);
        return view('createadmin', ["locale" => $locale]);
    }

    public function saveadmin(Request $request)
    {
        App::setLocale($request->locale);
        $this->validate($request, [
            'nama' => 'required|string|max:30',
            'notelp' => 'required|regex: ^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$^',
            'kodegender' => 'required|string|size:1',
            'jabatan' => 'required|string|max:30',
            'alamat' => 'required|string|max:60',
        ]);
        $data_admin = new Admin();
        $data_admin->nama = $request->nama;
        $data_admin->notelp = $request->notelp;
        $data_admin->kodegender = $request->kodegender;
        $data_admin->jabatan = $request->jabatan;
        $data_admin->alamat = $request->alamat;
        $data_admin->save();
        return redirect('/admin')->with('success', 'Data Admin Berhasil Ditambahkan');
    }

    public function editadmin(Request $req, $id)
    {
        App::setLocale($req->locale);
        $admin = Admin::find($id);
        return view('editadmin', compact('admin'), ["locale" => $req->locale]);
    }

    public function updateadmin(Request $request, $id)
    {
        App::setLocale($request->locale);
        $this->validate($request, [
            'nama' => 'required|string|max:30',
            'notelp' => 'required|regex: ^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$^',
            'kodegender' => 'required|string|size:1',
            'jabatan' => 'required|string|max:30',
            'alamat' => 'required|string|max:60',
        ]);
        $data_admin = Admin::find($id);
        $data_admin->nama = $request->nama;
        $data_admin->notelp = $request->notelp;
        $data_admin->kodegender = $request->kodegender;
        $data_admin->jabatan = $request->jabatan;
        $data_admin->alamat = $request->alamat;
        $data_admin->update();
        return redirect('/admin')->with('success', 'Data Admin Berhasil Diubah');
    }

    public function deladmin($id)
    {
        $data_admin = Admin::find($id);
        $data_admin->delete();
        return redirect('/admin')->with('success', 'Data Admin Berhasil Dihapus');
    }

    public function lap2(){
        $data_lap2 = DB::select(
            'SELECT IDADMIN, nama, jabatan, TRUNCATE((DATEDIFF(NOW(),created_at)/365),0) AS tahun
             FROM table_admin;'
        );
        return view('laporan.lap2', compact('data_lap2'));
    }

}
