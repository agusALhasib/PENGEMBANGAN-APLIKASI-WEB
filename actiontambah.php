<?php 
$koneksi = mysqli_connect('localhost','root','','pertemuan5');
$nama=$_POST['nama_mhs'];
$alamat=$_POST['alamat_mhs'];
$id_prodi=$_POST['prodi'];

$masuk = "INSERT INTO tbl_mhs(id_prodi,nama_mhs,alamat_mhs) VALUES ('$id_prodi','$nama','$alamat')";

$hasil=mysqli_query($koneksi,$masuk);

if ($hasil) {
	echo "
		<script>
			alert ('Data Berhasil Ditambah');
			document.location.href='datamhs.php';
		</script>
	";
}else{
	echo "
		<script>
			alert ('Data Gagal Ditambah');
			document.location.href='datamhs.php';
		</script>
	";
}


 ?>