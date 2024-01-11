<?php

// $host = "localhost";
// $username = "root";
// $password = "";
// $database_name = "apotek_rpl1";

$koneksi = mysqli_connect("localhost","root","", "db_laundry");

if(!$koneksi){
    die ("Koneksi Ke Database Gagal ". mysqli_connect_error($koneksi));
}


?>