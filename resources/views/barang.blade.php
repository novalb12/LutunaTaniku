@extends('layout.layout')
@section('konten')
    <div class="container bgproduk" style="background-color: #47686B">
        <div class="col-12 jProduk">
            X.XXX Produk
        </div>
        <div class="bgproduk row">
            <div class="filter col-3">
                <label class="kategori">
                    <span class="h2">Kategori</span><br>
                    <input list="browsers" name="myBrowser" />
                </label>
                <datalist id="browsers">
                    <option value="Chrome">
                    <option value="Firefox">
                    <option value="Internet Explorer">
                    <option value="Opera">
                    <option value="Safari">
                    <option value="Microsoft Edge">
                </datalist>
                <label class="lokasi">
                    <span class="h2">Lokasi</span><br>
                    <input list="browsers" name="myBrowser" />
                </label>
                <datalist id="browsers">
                    <option value="Chrome">
                    <option value="Firefox">
                    <option value="Internet Explorer">
                    <option value="Opera">
                    <option value="Safari">
                    <option value="Microsoft Edge">
                </datalist>
                <div class="penilaian">
                    <span class="h2">Penilaian</span>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <div>
                    <button>FIlter Barang</button>
                </div>
            </div>

            <div class="col-9">

                <div class="listproduk row">
                @foreach ($barang as $p)

                    <div class="produk col-3">
                        <a href="{{route('catalog', ['id' => $p->id])}}">
                            <img src="{{asset('image/'.$p->imgfile)}}" width="300" height="300">
                        </a>
                            <span>{{$p->productname}}</span><br><br>
                            <span style="font-style:normal;font-weight:normal;">{{$p->harga}}</span></span><br><br>
                            <span style="font-style:normal;font-weight:lighter;">{{$p->description}}</span><br>
                            <span>Kota Bandung</span>

                    </div>
                    @endforeach

                </div>



                {{$barang->links()}}
                Halaman : {{ $barang->currentPage() }} <br/>
                Jumlah Data : {{ $barang->total() }} <br/>
                Data Per Halaman : {{ $barang->perPage() }} <br/>
            </div>
        </div>
    </div>
@endsection
