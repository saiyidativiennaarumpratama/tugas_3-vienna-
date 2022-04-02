<?php
include 'koneksi.php';

$id =$_GET['id'];
$sql = "DELETE FROM tbl_018 WHERE id_mhs=$id";
$hasil = mysqli_query ($koneksi, $sql);
if (!$hasil){
    echo"gagal";
}else{
    echo"<h1 align='center'>Data Berhasil Dihapus <a href = 'data_mahasiswa.php'><h5><i>Show Data</h5></a>";
}
?>