<?php 
$koneksi = mysqli_connect('localhost','root','','pertemuan5');
$sql = "SELECT id_mhs,nama_mhs,alamat_mhs,nama_prodi FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi=p.id_prodi";
$hasil = mysqli_query($koneksi,$sql);
 ?>

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
  <h2>Table Data Mahasiswa</h2>
  <p>Data Mahasiswa insyaallah berprestasi : </p> 
  <a href="tambah-data.php" class="btn btn-primary btn-sm">Tambah Data Mahasiswa</a>
  <br><br>       
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Nama Mahasiswa</th>
        <th>Alamat Mahasiswa</th>
        <th>Program Studi</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
    <?php 
    	while ($baris=mysqli_fetch_assoc($hasil)) {
     ?>
      <tr>
        <td><?php echo $baris['id_mhs']; ?></td>
        <td><?php echo $baris['nama_mhs']; ?></td>
        <td><?php echo $baris['alamat_mhs']; ?></td>
        <td><?php echo $baris['nama_prodi']; ?></td>
        <td>
        	<a href="formubah.php?id=<?=$baris["id_mhs"];?> "class="btn btn-primary">Edit</a>
        	<a href="hapus.php?id=<?=$baris["id_mhs"];?>"class="btn btn-danger"onclick="return confirm('Yakin anda mau delete?')">Delete</a>
        </td>
      </tr>
  	<?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
