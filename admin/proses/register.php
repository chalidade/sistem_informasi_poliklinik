<?php
error_reporting(0);
session_start();
include "koneksi.php";

$nama      = $_POST['nama'];
$email     = $_POST['email'];
$hp      = $_POST['hp'];
$password  = $_POST['pass'];


$add       = mysqli_query($connect,"INSERT INTO `user` (`id`, `Nama`, `Email`, `Hp`, `Password`) VALUES (NULL, '$nama', '$email', '$hp', '$password');");
echo "<script>alert('Daftar Berhasil'); window.location = '../login.php';</script>";
