<?php 
    include "koneksi.php";

    $id =$_POST['id_mhs'];
    $nama = $_POST['nama_mhs'];
    $nim = $_POST['nim_mhs'];
    $alamat = $_POST['alamat_mhs'];

    $sql = "UPDATE tbl_018 set nama_mhs='$nama',nim_mhs='$nim',alamat_mhs='$alamat' WHERE id_mhs=$id";
    $hasil = mysqli_query ($koneksi, $sql);
    if (!$hasil){
        echo "gagal";
    }else{
        echo"<h1 align='center'>Data Berhasil Diedit <a href = 'data_mahasiswa.php'><h5><i>Show Data</h5></a>";
        
    }
?>