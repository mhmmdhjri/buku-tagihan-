<?php
include "config.php";

$id= $_GET["delete"];
$query= "DELETE FROM tb_tagihan WHERE id_tagihan = '$id' ";

$sql = mysqli_query($koneksi,$query);
if($sql){
    header("location:index.php");
}
?>