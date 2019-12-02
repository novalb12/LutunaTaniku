<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css">
    @yield('head')
</head>
@yield('style')
<body style="background-color: #4A6C6F">
    <div class="container-fluid header">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-2 toplogo">
                <img src="{{asset('img/Logo.png')}}"></img>
            </div>
            <div class="col-5"></div>
            <div class="col-4 searchnav">
                <form action="/barang/cari" method ="GET">
                    <input type="text" name="cari" placeholder="Cari produk atau toko..." value="{{old('cari')}}">
                    <button>
                    <img src="{{asset('img/Search_icon.png')}}" />
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    @yield('konten')
    </div>
</body>
</html>
