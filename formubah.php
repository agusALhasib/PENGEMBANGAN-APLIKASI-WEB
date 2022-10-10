<?php
$conn = mysqli_connect("localhost","root","","pertemuan5");
$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM tbl_mhs WHERE id_mhs=$id");
$data = mysqli_fetch_assoc($sql);

$sql1 = mysqli_query($conn,"SELECT * FROM tbl_prodi");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Ubah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-3">
  <h2>Ubah Data Diri Mahasiswa</h2>
  <p>Silahkan ubah data diri Mahasiswa.</p>
  	
  <form action="actionrubah.php" method="POST">
      <input type="hidden" name="id_mhs" value="<?php echo $data['id_mhs']?>">

    <div class="mb-3 mt-3">
            <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama_mhs" value="<?php echo $data['nama_mhs']?>" name="nama_mhs">

    <br>

      <label for="nama_alamat">Alamat Mahasiswa</label>
      <input type="text" class="form-control" id="nama_alamat" value="<?php echo $data['alamat_mhs']?>" name="nama_alamat">

    <br>

      <label for="sel1" class="form-label">Pilih Program Studi (pilih salah satu):</label>
    <select class="form-select" id="sel1" name="nama_prodi">
      <?php 
      while ($data1 = mysqli_fetch_assoc($sql1)) {
        if($data['id_prodi'] == $data1['id_prodi'])
        {
          ?>
      <option selected value="<?php echo $data1['id_prodi']; ?>"><?php echo $data1['nama_prodi']; ?></option>

        <?php } else{ ?>
        
      <option value="<?php echo $data1['id_prodi']; ?>"><?php echo $data1['nama_prodi']; ?></option>

<?php } ?>        
     
     
        <?php } ?>
    </select>
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>


