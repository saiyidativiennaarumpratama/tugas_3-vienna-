<?php 
	include "koneksi.php";

	$nama = $_POST['nama_mhs'];
	$nim = $_POST['nim_mhs'];
	$alamat = $_POST['alamat_mhs'];

	$sql = "INSERT INTO tbl_018 VALUES (null,'$nama','$nim','$alamat')";
	$hasil = mysqli_query ($koneksi, $sql);
	if (!$hasil){
	    echo "gagal";
	}else{
		echo"<h1 align='center'>Data Berhasil Ditambah <a href = 'data_mahasiswa.php'><h5><i>Show Data</h5></a>";
	    
	}
?>