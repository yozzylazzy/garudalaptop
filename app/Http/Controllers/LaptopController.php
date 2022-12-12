<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        $search = $request->post('search');
        $data_laptop = DB::table('table_laptop')->where('namalaptop', 'like', '%' . $search . '%')->paginate(9);
        return view('laptop', ['data_laptop' => $data_laptop]);
    }

    public function getLaptopAll($locale = 'id')
    {
        App::setLocale($locale);
        $data_laptop = Laptop::orderBy('IDlaptop', 'asc')->paginate(9);
        return view('laptop', compact('data_laptop'));
    }
    public function getOneLaptop($request)
    {
        $data_laptop = Laptop::find($request);
        return view('laptop', compact('data_laptop'));
    }

    public function createlaptop($locale = 'id')
    {
        App::setLocale($locale);
        return view('createlaptop', ["locale" => $locale]);
    }

    public function savelaptop(Request $request)
    {
        App::setLocale($request->locale);
        $this->validate($request, [
            'namalaptop' => 'required|string',
            'merklaptop' => 'required|string',
            'harga' => 'required|int',
            'cpu' => 'required|string',
            'gpu' => 'required|string',
            'ram' => 'required|int',
            'disk' => 'required|int',
            'batterycapacity' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        $data_laptop = new Laptop();
        $data_laptop->namalaptop = $request->namalaptop;
        $data_laptop->merklaptop = $request->merklaptop;
        $data_laptop->harga = $request->harga;
        $data_laptop->cpu = $request->cpu;
        $data_laptop->gpu = $request->gpu;
        $data_laptop->ram = $request->ram;
        $data_laptop->disk = $request->disk;
        $data_laptop->batterycapacity = $request->batterycapacity;
        $data_laptop->linkgambar = $request->linkgambar;
        $data_laptop->save();
        return redirect('/laptop')->with('success', 'Data laptop Berhasil Ditambahkan');
    }

    public function editlaptop(Request $req, $id)
    {
        App::setLocale($req->locale);
        $laptop = Laptop::find($id);
        return view('editlaptop', compact('laptop'), ["locale" => $req->locale]);
    }

    public function updatelaptop(Request $request, $id)
    {
        App::setLocale($request->locale);
        $this->validate($request, [
            'namalaptop' => 'required|string',
            'merklaptop' => 'required|string',
            'harga' => 'required|int',
            'cpu' => 'required|string',
            'gpu' => 'required|string',
            'ram' => 'required|int',
            'disk' => 'required|int',
            'batterycapacity' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        $data_laptop = Laptop::find($id);
        $data_laptop->namalaptop = $request->namalaptop;
        $data_laptop->merklaptop = $request->merklaptop;
        $data_laptop->harga = $request->harga;
        $data_laptop->cpu = $request->cpu;
        $data_laptop->gpu = $request->gpu;
        $data_laptop->ram = $request->ram;
        $data_laptop->disk = $request->disk;
        $data_laptop->batterycapacity = $request->batterycapacity;
        $data_laptop->linkgambar = $request->linkgambar;
        $data_laptop->update();
        return redirect('/laptop')->with('success', 'Data laptop Berhasil Diubah');
    }

    public function dellaptop($id)
    {
        $data_laptop = Laptop::find($id);
        $data_laptop->delete();
        return redirect('/laptop')->with('success', 'Data laptop Berhasil Dihapus');
    }
}
