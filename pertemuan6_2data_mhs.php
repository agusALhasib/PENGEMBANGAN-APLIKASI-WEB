<?php
  require 'fungsi.php';
  $result_mhs = mhs("SELECT * FROM tbl_mhs INNER JOIN tbl_prodi ON tbl_mhs.id_prodi = tbl_prodi.id_prodi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mahasiswa->Pertemuan Ke 6</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data Mahasiswa Teknik</h2>
  <p>Data Mahasiswa di Fakultas Teknik:</p>
  <a href="formtambah.php" terget="blank"</button type="button" class="btn btn-primary">Tambah Data Mahasiswa</button></a>            
  <table class="table">
    <thead>
      <tr>
        <th>Nama MHS</th>
        <th>Prodi</th>
        <th>Alamat MHS</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($result_mhs as $baris) :?>
      <tr>
        <td><?php echo $baris['nama_mhs']; ?></td>
        <td><?php echo $baris['prodi']; ?></td>
        <td><?php echo $baris['alamat_mhs']; ?></td>
        <td>
            <a type="button" class="btn btn-warning">Edit</a>
            <a type="button" class="btn btn-danger" href="hapus.php?id_mhs=<?php echo $baris['id_mhs']; ?>">Delete</a>
         </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
