<?php
$host = "localhost";
$user = "root";
$password = "";
$database="latihan1";

$Koneksi = mysqli_connect($host,$user,$password,$database);

if (mysqli_connect_errno()) {
  echo"Gagal Terhubung: " . mysqli_connect_error();
}else{
  echo "Berhasil Terhubung";
}