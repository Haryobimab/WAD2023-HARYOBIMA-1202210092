<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3307";
$username = "root";
$password = "";
$DatabaseName = "modul4_wad";

$connect = mysqli_connect($host, $username, $DatabaseName);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$connect) {
    die("Connection failed: [pesan kesalahan koneksi]" . $connect->connect_error);
  }
// 
 
?>