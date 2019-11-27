<div class="container">
        @foreach ($barang as $data)
            <img src='/storage/{{$data->imgfile}}')>
        @endforeach
    </div>
