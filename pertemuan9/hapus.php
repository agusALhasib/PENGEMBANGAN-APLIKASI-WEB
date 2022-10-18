<?php
$koneksi=mysqli_connect("localhost","root","","db_227");
$id = $_GET['id'];
$sql = "delete from tbl_hasib where id_hasib = $id";
$query = mysqli_query($koneksi,$sql);

if ($query) {
		echo "
			<script>
				alert('Data telah Berhasil Dihapus');
				document.location.href = 'tampil.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data Gagal Dihapus');
				document.location.href = 'tampil.php';
			</script>
		";
}

?>