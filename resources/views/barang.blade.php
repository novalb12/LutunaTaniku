@extends('layout.layout')
@section('konten')
    <div class="jumbotron">
    <form action ="{{ route('addbarang') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="input-group">
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input">
                <label class="custom-file-label">Gambar</label>
            </div>
        </div>
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text"  name="namaproduk" class="form-control" placeholder="Produk">
        </div>
        <div class="form-group">
            <label>Deskripsi Produk</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="Produk">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
    </form>
    </div>
@endsection
