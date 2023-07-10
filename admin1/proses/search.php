<?php
// Koneksi database
include('connection.php');

// Mengambil nilai keyword dari method GET
$keyword = $_GET['keyword'];

// Searching
$query = mysqli_query($connect, "SELECT * FROM booking WHERE nama LIKE '%$keyword%' OR no_telepon LIKE '%$keyword%' OR tanggal LIKE '%$keyword%' OR waktu LIKE '%$keyword%' OR durasi LIKE '%$keyword%' OR jumlah_pemain LIKE '%$keyword%' OR no_lapangan LIKE '%$keyword%' OR harga LIKE '%$keyword%' OR deposito LIKE '%$keyword%' OR keterangan LIKE '%$keyword%' ");
// Mengubah ke array multidimensi
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
