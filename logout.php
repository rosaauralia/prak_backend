<?php
session_start();

$_SESSION['id']='';
$_SESSION['username']='';
$_SESSION['nama']='';
$_SESSION['keterangan']='';
$_SESSION['password']='';

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['nama']);
unset($_SESSION['keterangan']);
unset($_SESSION['password']);

session_unset();
session_destroy();

header("Location: index.php");
?>