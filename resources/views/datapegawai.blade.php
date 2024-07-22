<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <!-- As a link -->


<!-- As a heading -->
<nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <span class="navbar-brand mb-0 h1">Data Pegawai</span>
  </div>
</nav>

<!-- content -->
<div class="text-center">
    <div class="row mb-5 mt-5">
        <h3>Data Pegawai</h3>
    </div>
</div>
 <div class="container">
 <button class="btn btn-success" type="submit">+ Tambah</button>
 <table class="table">
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">No Tlp</th>
      <th scope="col">Menu</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach ($data as $row)

  
    <tr>
      <th scope="row">{{ $row->id}}</th>
        <td>{{ $row->nama}}</td>
        <td>{{ $row->jeniskelamin}}</td>
        <td>{{ $row->nomertelephone}}</td>
        <td>
        <button class="btn btn-danger" type="submit">Hapus</button>
        <button class="btn btn-warning" type="submit">Edit</button>
        </td>
    </tr>
   
@endforeach
  </tbody>
</table>
    </div>
 </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>