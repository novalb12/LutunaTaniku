@extends('layout.layout')
@section('konten')
    <div class="jumbotron">
    <form action ="{{ route('addbarang') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="input-group">
        <label>Gambar</label>
        <br>
            <div class="custom-file">

                <input type="file" name="image" class="custom-file-input">
                <label class="custom-file-label">Gambar</label>
            </div>
        </div>
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text"  name="namaproduk" class="form-control" placeholder="Nama">
        </div>
        <div class="form-group">
            <label>Deskripsi Produk</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="Harga">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
    </form>
    </div>
@endsection
