<?php
include "../koneksi.php";
$id = $_GET['id'];
$query_delete = mysqli_query($koneksi, "DELETE FROM tb_outlet WHERE id=$id");

if(!$query_delete){
    echo "Gagal Delete ".mysqli_error($koneksi);
}else{
    header('Location:../view/view_outlet.php');
}

?>