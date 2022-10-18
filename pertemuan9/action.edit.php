<?php
$conn = mysqli_connect("localhost","root","","db_227");
$id_mhs = $_POST['id_mhs'];
$nama = (strtolower($_POST['nama_hasib']));
$alamat = (strtolower($_POST['nama_alamat']));

// ubah jadi kapital
$Nama = ucwords($nama);
$Alamat = ucwords($alamat);

$ubah = mysqli_query($conn,"UPDATE tbl_hasib SET 
nama_hasib= '$Nama',
alamat_hasib= '$Alamat'
WHERE id_hasib=$id_mhs ");


if (!$ubah) {
		echo "
			<script>
				alert('Data Gagal Diubah');
				document.location.href = 'tampil.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data $Nama telah Berhasil Diubah');
				document.location.href = 'tampil.php';
			</script>
		";
	}
		
?>