<?php

namespace App\Http\Controllers;

use App;
use App\Models\DetilPenjualan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Laptop;

class PenjualanController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        $search = $request->post('search');
        $data_penjualan = DB::table('table_penjualan')->join('table_admin', 'table_penjualan.IDAdmin', '=', 'table_admin.IDAdmin')->join('table_pembeli', 'table_penjualan.NIK', '=', 'table_pembeli.NIK')->select('table_penjualan.*', 'table_admin.nama as namaadmin', 'table_pembeli.nama')->where('table_penjualan.NIK', 'like', '%' . $search . '%')->paginate(9);
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
        try {
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
            foreach ($request->IDLaptop as $key => $value) {
                $data_laptop = new Laptop();
                $data_laptop->IDLaptop = $request->IDLaptop[$key];
                $data_detailjual = new DetilPenjualan;
                $data_detailjual->IDTransaksi = $data_penjualan->IDTransaksi;
                $data_detailjual->IDLaptop = $data_laptop->IDLaptop;
                $data_detailjual->jumlah = $request->jumlah[$key];
                $data_detailjual->save();
            }
            return redirect('/penjualan')->with('success', 'Data Penjualan Berhasil Ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('pesan', $e->getMessage());
        }
    }

    //     return redirect('/penjualan')->with('success', 'Data Penjualan Berhasil Ditambahkan');
    // }

    public function editpenjualan(Request $req, $id)
    {
        App::setLocale($req->locale);
        $penjualan = Penjualan::find($id);
        $penjualan = DB::table('table_penjualan')->join('table_detil_penjualan', 'table_detil_penjualan.IDTransaksi', '=', 'table_penjualan.IDTransaksi')->select('table_penjualan.*', 'table_detil_penjualan.*')->where('table_penjualan.IDTransaksi', $id)->first();
        //$detilpenjualan = DetilPenjualan::where('IDTransaksi', $id)->get();
        return view('editpenjualan', compact('penjualan'),  ["locale" => $req->locale]);
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
        $data_detil_penjualan = DetilPenjualan::where('IDTransaksi', $data_penjualan->IDTransaksi)->delete();
        $data_penjualan->delete();
        return redirect('/penjualan')->with('success', 'Data Penjualan Berhasil Dihapus');
    }

    public function lap1()
    {
        $data_lap1 = DB::select(
            'SELECT tp.NIK, tp.nama, tp.pekerjaan, SUM(tl.harga*td.jumlah) AS total
            FROM table_pembeli tp JOIN table_penjualan te ON (tp.NIK = te.NIK) 
            JOIN table_detil_penjualan td ON (te.IDTransaksi = td.IDTransaksi) JOIN
            table_laptop tl ON (td.IDLaptop = tl.IDLaptop)
            GROUP BY tp.NIK, tp.nama, tp.pekerjaan;'
        );
        return view('laporan.lap1', compact('data_lap1'));
    }

    public function lap3()
    {
        $data_lap3 = DB::select(
            'SELECT DATE_FORMAT(tglpembelian, "%M %Y") AS bulantahun, COUNT(*) AS jumlah, SUM(tl.harga*td.jumlah) AS total
            FROM table_penjualan te JOIN table_detil_penjualan td ON (te.IDTransaksi = td.IDTransaksi) JOIN
                        table_laptop tl ON (td.IDLaptop = tl.IDLaptop)
            GROUP BY DATE_FORMAT(tglpembelian,"%M %Y");'
        );
        return view('laporan.lap3', compact('data_lap3'));
    }

    public function lap4()
    {
        $data_lap4 = DB::select(
            'SELECT te.IDTransaksi, tp.nama, COUNT(td.jumlah) AS jumlah
            FROM table_pembeli tp JOIN table_penjualan te ON (tp.NIK = te.NIK) 
            JOIN table_detil_penjualan td ON (te.IDTransaksi = td.IDTransaksi) JOIN
            table_laptop tl ON (td.IDLaptop = tl.IDLaptop)
            GROUP BY te.IDTransaksi, tp.nama;'
        );
        return view('laporan.lap4', compact('data_lap4'));
    }

    public function lap5()
    {
        $data_lap5 = DB::select(
            'SELECT td.IDLaptop, tl.namalaptop, tl.harga, COUNT(*) AS jumlah
            FROM table_penjualan te JOIN table_detil_penjualan td ON (te.IDTransaksi = td.IDTransaksi) JOIN
            table_laptop tl ON (td.IDLaptop = tl.IDLaptop)
            GROUP BY td.IDLaptop, tl.namalaptop, tl.harga
            ORDER BY td.IDLaptop;'
        );
        return view('rekap.lap5', compact('data_lap5'));
    }

    public function lap6()
    {
        $data_lap6 = DB::select(
            'SELECT ta.IDAdmin, ta.nama, ta.jabatan, COUNT(*) AS jumlah
            FROM table_admin ta JOIN table_penjualan te ON (ta.IDAdmin = te.IDAdmin)
            GROUP BY ta.IDAdmin, ta.nama, ta.jabatan
            ORDER BY ta.IDAdmin ASC;'
        );
        return view('rekap.lap6', compact('data_lap6'));
    }

    public function lap7()
    {
        $data_lap7 = DB::select(
            'SELECT te.metodepembayaran, COUNT(*) AS jumlah
            FROM table_penjualan te JOIN table_detil_penjualan td ON (te.IDTransaksi = td.IDTransaksi) JOIN
            table_laptop tl ON (td.IDLaptop = tl.IDLaptop)
            GROUP BY te.metodepembayaran
            ORDER BY COUNT(*) ASC;'
        );
        return view('rekap.lap7', compact('data_lap7'));
    }

    public function lap8()
    {
        $data_lap8 = DB::select(
            'SELECT tp.NIK, tp.nama, tp.pekerjaan, SUM(jumlah) AS jumlah
            FROM table_pembeli tp JOIN table_penjualan te ON (tp.NIK = te.NIK) 
            JOIN table_detil_penjualan td ON (te.IDTransaksi = td.IDTransaksi) JOIN
            table_laptop tl ON (td.IDLaptop = tl.IDLaptop)
            GROUP BY tp.NIK, tp.nama, tp.pekerjaan
            ORDER BY tp.NIK;'
        );
        return view('rekap.lap8', compact('data_lap8'));
    }
}
