<!DOCTYPE html>
<html lang="en">
<head>
  <title>form tambah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form tambah data </h2>
  <form action="proses.php" method="post">
    <div class="mb-3">
      <label for="nama_prodi">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama_mhs" placeholder="Masukkan nama" name="nama_mhs">
    </div>
    <div class="mb-3">
      <label for="alamat_hasib">Alamat Mahasiswa</label>
      <input type="text" class="form-control" id="alamat_hasib" placeholder="Masukkan alamat" name="alamat_hasib">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
