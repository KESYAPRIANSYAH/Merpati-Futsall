<?php
// Koneksi
include('connection.php');

// Menyimpan semua nilai query string ke variabel
$isipesan = $_POST['isipesan'];


// Menambahkan ke database
$insert = mysqli_query($connect, "INSERT INTO pesan SET isipesan='$isipesan'");

// Event Handler
if ($insert) {
    echo "<script>alert('Data berhasil dikirim!'); window.location.replace('../pages-user/home.php');</script>"; exit();
} else {
    echo "Data gagal ditambahkan...";
}

?>