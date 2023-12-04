<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
$host = "localhost:3307";
$username = "root";
$password = "";
$DatabaseName = "modul3_wad";

// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$connect = mysqli_connect($host, $username, $password, $DatabaseName);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($connect->connect_error) {
    die("Connection failed: [pesan kesalahan koneksi]" . $connect->connect_error);
  }
  echo "Connected successfully";
// 
?>