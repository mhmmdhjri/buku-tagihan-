<?php
include "config.php";

$hari = $_POST["hari"];
$tagihan = $_POST["tagihan"];
$deadline = $_POST["deadline"];


$query = "INSERT INTO tb_tagihan VALUES(null,'$hari','$tagihan','$deadline')";
$sql =mysqli_query($koneksi,$query);

if($sql){
 header("location:index.php");
}else{
    $query;
}
?>