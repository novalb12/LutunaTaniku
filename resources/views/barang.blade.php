<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
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
    </div>

  </body>
</html>
