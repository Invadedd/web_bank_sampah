<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'bank_sampah';

// Buat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $dbname);

// Periksa apakah koneksi berhasil atau tidak
if (!$conn) {
  die('Koneksi gagal: ' . mysqli_connect_error());
}