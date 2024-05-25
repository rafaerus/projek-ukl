<?php
if(isset($_POST['submit'])){
    $pemesan= $_POST['pemesan'];
    $harga= $_POST['harga'];
    $jenis= $_POST['jenis'];

    include_once("koneksi database.php");
    $result = mysqli_query($mysqli,
    "INSERT INTO layanan(pemesan,harga,jenis) VALUES('$pemesan','$harga','$jenis')");
    header("location:selamat.php");
}

