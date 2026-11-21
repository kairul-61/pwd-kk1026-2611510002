<?php
// koneksi.php — Berkas koneksi PHP-MySQL (MySQLi) yang dapat digunakan kembali.
// Sesuai RPS PWD Pertemuan 11: koneksi reusable + penanganan kegagalan koneksi.

$host     = "localhost";
$user     = "root";
$password = "";                    // Laragon default: password root kosong.
$database = "db_pwd_2611510002";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Penanganan kegagalan koneksi.
if (!$koneksi) {
  die("Koneksi ke basis data gagal: " . mysqli_connect_error());
}

mysqli_set_charset($koneksi, "utf8mb4");
