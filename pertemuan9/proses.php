<?php
$koneksi=mysqli_connect("localhost","root","","db_227");

$nama=$_POST['nama_mhs'];
$alamat=$_POST['alamat_mhs'];

$sql="insert into tbl_hasib value(null,'$nama','$alamat')";
$hasil=mysqli_query($koneksi,$sql);

if (!$hasil) {
		echo "
			<script>
				alert('Data Gagal Ditambah');
				document.location.href = 'tampil.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data $Nama telah Berhasil Ditambah');
				document.location.href = 'tampil.php';
			</script>
		";
}

?>