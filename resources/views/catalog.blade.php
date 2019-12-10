@extends('layout.layout')
@section('konten')
            <div class="listproduk row">

                    <div class="produk col-3">
                        <img src="{{asset('image/'.$barang->imgfile)}}" width="300" height="300">
                        <br/>>
                        <span>{{$barang->productname}}</span><br><br>
                        <span style="font-style:normal;font-weight:normal;">{{$barang->harga}}</span><br><br>
                        <span style="font-style:normal;font-weight:lighter;">{{$barang->description}}</span><br>
                        <span style="font-style:normal;font-weight:lighter;">Penjual : {{$barang->username}}</span><br>
                        <span>Kota Bandung</span>

                    </div>

                </div>
@endsection
