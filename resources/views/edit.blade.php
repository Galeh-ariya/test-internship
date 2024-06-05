<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Data</h1>

        <form action="/dashboard/edit/confirm" method="post">
            @csrf
            @method('PUT')
            @foreach($var as $v)
            <input type="hidden" name="id[{{ $loop->iteration }}]" value="{{ $v->id }}">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="name" name="name[{{ $loop->iteration }}]" value="{{ $v->name }}">
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Harga Produk</label>
              <input type="number" class="form-control" id="price" name="price[{{ $loop->iteration }}]" value="{{ $v->price }}">
            </div>
            <hr>
            @endforeach
            <button type="submit" class="btn btn-warning">Ubah Produk</button>
            <a href="/dashboard" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>