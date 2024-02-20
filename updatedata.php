<?php

include "config.php";
$id=$_POST['id'];
$hari = $_POST["hari"];
$tagihan = $_POST["tagihan"];
$deadline = $_POST["deadline"];
// var_dump($hari);
$query = "UPDATE tb_tagihan SET hari_tagihan='$hari',tagihan_tagihan='$tagihan',deadline_tagihan='$deadline' WHERE id_tagihan='$id' ";
$sql = mysqli_query($koneksi,$query);

if($sql){
   header("location:index.php");
}else{
    echo $query;
};

?>