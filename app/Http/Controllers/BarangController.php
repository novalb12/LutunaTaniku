<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Carbon\Carbon;
use Image;
use File;

class BarangController extends Controller
{
    public function index()
    {

        return view('barang');
    }

    public function store(Request $request)
    {
        $barang = new Barang();

        $barang->productname = $request->input('namaproduk');
        $barang->description = $request->input('deskripsi');
        $barang->username = auth()->user()->name;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $location=public_path('image/'.$filename);
            Image::make($file)->resize(300,300)->save($location);
            //$file->move('uploads/barang/',$filename);
            $barang->imgfile = $filename;
            //$barang->imgfile = request()->image->store('uploads','public');

        }
        else
        {
             dd($request);
            $barang->imgfile = '';
        }

        $barang->save();

        return view('barang',['barang'=>$barang]);
    }

    public function penjual()
    {
        $barang = Barang::paginate(10);
        return view('penjual',['barang'=>$barang]);
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		$barang = Barang::where('productname','like','%'.$cari.'%')->paginate(10);

		return view('penjual',['barang' => $barang]);

	}
}
