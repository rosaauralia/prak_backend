<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="index.css">
<div class="container">
    <h1>Selamat Datang Kembali Anggota</h1>
    <div class="wrap">
    <?php
$username = $_POST['username'];
$password = $_POST['password'];
$queries=sprintf("SELECT * FROM modul1 where username='%s' and password='%s' " ,
    mysqli_real_escape_string($con, $username),
    mysqli_real_escape_string($con, $password));
$ceklogin=mysqli_query($con,$queries);
$result=mysqli_fetch_array($ceklogin);

if(mysqli_num_rows($ceklogin) == null) {
    include 'index.php';
} else {
    printf("No = %s \n", mysqli_num_rows($ceklogin)); echo '<br>';
    echo "Urutan Anggota = ", $result[0]; echo '<br>';
}
?>
    </div>
    <button type="submit" class="submit">
        <a href="logout.php">Logout</a>
    </button>
</div>
</body>
</html>
