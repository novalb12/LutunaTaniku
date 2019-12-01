@extends('layout.layout')
@section('konten')
    <div class="poster" style="background-color: #4A6C6F">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-7 poster1">
                    <div class="col h1">
                        <span>TANI BUTUH MAKAN</span><br/>
                        <span>MAKAN BUTUH TANI</span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col h2">
                        <span>
                            Saat ini terdapat sekitar 41% warga Indonesia yang bekerja di sektor pertanian.</br>
                            Ekspor pertanian juga tumbuh signifkan mencapai 3,0% per Juli 2019.
                        </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <a href="{{ route('register')}}"><button>Daftarkan Dirimu</button></a>
                    </div>
                </div>
                <div class="col-2">
                    <img src="{{asset('img/Petani_poster.png')}}"></img>
                </div>
                <div class="col"></div>
            </div>
    </div>
    <div class="container-fluid peran" style="background-color: #436164">
        <center>
            <div class="row">
                <div class="col-6">
                    <img src="{{asset('img/Petani_poster.png')}}"></img></br>
                    <a href="{{ route('login') }}"><button>Aku Penjual</button></a>
                </div>
                <div class="col-6">
                    <img src="{{asset('img/Petani_poster.png')}}"></img></br>
                    <a href="{{ route('login') }}"><button>Aku Pembeli</button></a>
                </div>
            </div>
        </center>
    </div>

    <div class="container-fluid langkah_langkah" style="background-color: #4A6C6F">
        <p class="text-center title">LANGKAH - LANGKAH PENGGUNAAN</p>
        <div class="row">
            <div class="col-3 box">
                <img src="{{asset('img/1.png')}}"></img></br>
                <center>
                    <img src="{{asset('img/Petani_poster.png')}}"></img></br>
                    <p>Daftarkan dirimu di halaman yang sudah disediakan </p>
                </center>
            </div>
            <div class="col-3 box">
                <img src="{{asset('img/2.png')}}"></img></br>
                <center>
                    <img src="{{asset('img/Petani_poster.png')}}"></img></br>
                    <p>Pilihlah peranmu, apakah anda ingin menjadi penjual atau sebagai pembeli</p>
                </center>
            </div>
            <div class="col-3 box">
                <img src="{{asset('img/3.png')}}"></img></br>
                <center>
                    <img src="{{asset('img/Petani_poster.png')}}"></img></br>
                    <p>Pilihlah barang yang ingin anda beli maupun jual dan ikuti prosedur sesuai alur</p>
                </center>
            </div>
            <div class="col-3 box">
                <img src="{{asset('img/4.png')}}"></img></br>
                <center>
                    <img src="{{asset('img/Petani_poster.png')}}"></img></br>
                    <p>Lanjutkan terus hingga ada tanda "Ceklish" dan barang anda sudah siap untuk dijual maupun dibeli</p>
                </center>
            </div>
        </div>
    </div>

    <div class="container-fluid langkah_langkah" style="background-color: #4A6C6F">
        <p class="text-center title">TESTIMONI</p>
        <center>
        <div class="row">
            <div class="col-1">

            </div>
            <div class="col-3">
                test
            </div>
            <div class="col-4">
                test
            </div>
            <div class="col-3">
                test
            </div>
            <div class="col-1">

            </div>
        </div>
        </center>
    </div>
@endsection
