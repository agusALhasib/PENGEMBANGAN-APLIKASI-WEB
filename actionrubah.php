<?php
$conn = mysqli_connect("localhost","root","","pertemuan5");
$id_mhs = $_POST['id_mhs'];
$nama = htmlspecialchars(strtolower($_POST['nama_mhs']));
$alamat = htmlspecialchars(strtolower($_POST['nama_alamat']));
$prodi = $_POST['nama_prodi'];

// ubah jadi kapital
$Nama = ucwords($nama);
$Alamat = ucwords($alamat);

$ubah = mysqli_query($conn,"UPDATE tbl_mhs SET 
nama_mhs= '$Nama',
alamat_mhs= '$Alamat',
id_prodi = $prodi
WHERE id_mhs=$id_mhs ");


if (!$ubah) {
		echo "
			<script>
				alert('Data Gagal Diubah');
				document.location.href = 'datamhs.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data $Nama telah Berhasil Diubah');
				document.location.href = 'datamhs.php';
			</script>
		";
	}
		
?>