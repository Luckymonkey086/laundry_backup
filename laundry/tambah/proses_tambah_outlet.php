<?php
include "../koneksi.php";
$nama_outlet = $_POST['nama_outlet'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$query = mysqli_query($koneksi, "INSERT INTO tb_outlet VALUES (NULL,'$nama_outlet','$alamat','$telp')");


if(!$query){
    echo "Gagal Memasukan Data Outlet ". mysqli_error($koneksi); //jika gagal maka akan mencetak teks dan erornya
}else{
    // header('Location:view_obat.php');
    // exit;
    echo "<script>location.href='../view/view_outlet.php';</script>"; //pindah ke halaman view obat ketika berhasil
}