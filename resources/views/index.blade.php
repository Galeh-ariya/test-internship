<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>



<body>

  <div class="container mt-3">
    <h1>Halaman Dashboard Produk Admin</h1>
    <br>
    <form action="/dashboard/edit" method="post">
    @csrf
      <a href="/dashboard/insert" class="btn btn-primary mb-2">Tambah Data</a>
      <button type="submit" class="btn btn-warning mb-2">Edit Data</button>
      <button type="submit" formaction="/dashboard/delete" class="btn btn-danger mb-2" onclick="return confirm('Yakin anda ingin menghapus data yang terpilih?')">Hapus Data</button>
      <a href="/logout" class="btn btn-outline-danger mb-2 float-end">Logout</a>
      <br>
      
      @if (session('success'))
        <p class="bg-success p-2 w-50 my-3 text-white">{{ session('success') }}</p>
      @elseif (session('failed'))
        <p class="bg-danger p-2 w-50 my-3 text-white">{{ session('failed') }}</p>
      @endif
      
      <table class="table table-striped" style="width: 100%;">
        <thead>
          <tr>
            <th scope="col" style="width: 10%;">#</th>
            <th scope="col" style="width: 30%;">Name</th>
            <th scope="col" style="width: 30%;">Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $p)
          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="select[{{ $loop->iteration }}]" value="{{ $p->id }}" id="flexCheckChecked">
              </div>
            </td>
            <td>{{ $p->name }}</td>
            <td>Rp {{ number_format($p->price) }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>