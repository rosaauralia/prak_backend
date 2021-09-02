<?php
session_start();

include "koneksi.php";

$username = $_POST["username"];
$p = md5($_POST["password"]);

$sql = "SELECT * FROM user WHERE username='".$username."' and password='".$p."' ";
$hasil = mysqli_query($con,$sql);
$jumlah = mysqli_num_rows($hasil);

    if($jumlah>0){

        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["id"]=$row["id"];
        $_SESSION["username"]=$row["username"];
        $_SESSION["nama"]=$row["nama"];
        $_SESSION["keterangan"]=$row["keterangan"];
        $_SESSION["password"]=$row["password"];
        header("Location: ceklog.php");
    }else{
        echo "Username atau Password Anda Salah <a href='index.php'>Kembali</a>";
    }
?>