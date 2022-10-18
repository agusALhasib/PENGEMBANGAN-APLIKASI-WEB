<?php 
$koneksi = mysqli_connect('localhost','root','','db_227');
$sql = "select * from tbl_hasib";
$hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tampil Data</title>
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
  <h2>Table Data Mahasiswa</h2>
  <p>Data Mahasiswa insyaallah berprestasi : </p> 
  <a href="form_tambah.php" class="btn btn-primary btn-sm">Tambah Data Mahasiswa</a>
  <br><br>       
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Nama Prodi</th>
       	<th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
    <?php 
    	while ($baris=mysqli_fetch_assoc($hasil)) {
     ?>
      <tr>
        <td><?php echo $baris['id_hasib']; ?></td>
        <td><?php echo $baris['nama_hasib']; ?></td>
        <td><?php echo $baris['alamat_hasib']; ?></td>
        <td>
        	<a href="edit.php?id=<?=$baris["id_hasib"];?> "class="btn btn-primary">Edit</a>
        	<a href="hapus.php?id=<?=$baris["id_hasib"];?>"class="btn btn-danger"onclick="return confirm('Yakin anda mau delete?')">Delete</a>
        </td>
      </tr>
  	<?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
