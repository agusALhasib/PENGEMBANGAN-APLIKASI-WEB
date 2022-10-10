<?php 
	$conn = mysqli_connect("localhost","root","","pertemuan5");
	$id = $_GET['id'];
	$sql = "DELETE FROM tbl_mhs WHERE id_mhs=$id";
	$hasil=mysqli_query($conn,$sql);

	if ($hasil) {
		echo "
			<script>
				alert('Data telah Berhasil Dihapus');
				document.location.href = 'datamhs.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data Gagal Dihapus');
				document.location.href = 'datamhs.php';
			</script>
		";
	}

 ?>