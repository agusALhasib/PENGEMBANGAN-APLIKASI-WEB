<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Masukkan Data Diri Mahasiswa</h2>
  <form action="actiontambah.php" method="post">
    <div class="mb-3">
      <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama_mhs" placeholder="Masukkan nama" name="nama_mhs">
    </div>
    <div class="mb-3">
      <label for="alamat_mhs">Alamat Mahasiswa</label>
      <input type="text" class="form-control" id="alamat_mhs" placeholder="Masukkan alamat" name="alamat_mhs">
    </div>
    <div class="mb-3">
      <select class="form-select" name="prodi">
        <option>Pilih program studi...</option>
        <option value="1">1. Teknik Informatika</option>
        <option value="2">2. Sistem  Informasi</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
