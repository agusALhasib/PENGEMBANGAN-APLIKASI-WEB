<?php
$conn = mysqli_connect("localhost","root","","db_227");
$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM tbl_hasib WHERE id_hasib=$id");
$data = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tampil Ubah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <div class="container mt-3">
  <h2>Pertemuan 9</h1>
  <p>Nama : Agus Muhammad Al Hasib</p>
  <p>Nim : 210411100227</p>
  <p>Kelas : Paw C</p>
  <hr>

<div class="container mt-3">
  <h2>Ubah Data Mahasiswa</h2>
  <p>Silahkan ubah data mahasiswa.</p>
    
  <form action="action.edit.php" method="POST">
      <input type="hidden" name="id_mhs" value="<?php echo $data['id_hasib']?>">

    <div class="mb-3 mt-3">
            <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama_mhs" value="<?php echo $data['nama_hasib']?>" name="nama_hasib">

    <br>

      <label for="alamat_hasib">Alamat</label>
      <input type="text" class="form-control" id="alamat_hasib" value="<?php echo $data['alamat_hasib']?>" name="nama_alamat">

    <br>

      
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>


