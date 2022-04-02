<?php
$server = "localhost";
$user = "root";
$password ="";
$dbname = "viennaarum";

//koneksi
$koneksi = mysqli_connect($server,$user,$password,$dbname);

if (!$koneksi){
    echo "koneksi gagal";
}


?>