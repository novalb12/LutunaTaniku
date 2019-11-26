<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

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
            $file->move('uploads/barang',$filename);
            $barang->imgfile = $filename;
        }
        else
        {
            return $request;
            $barang->imgfile = '';
        }

        $barang->save();

        return view('barang')->with('barang',$barang);
    }
}
