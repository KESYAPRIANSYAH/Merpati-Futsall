<?php
// Koneksi
include('connection.php');

// id dari query string
$id = $_GET['id'];

// Query delete spesifik menggunakan id
$delete = mysqli_query($connect, "DELETE FROM booking WHERE id='$id' ");

// Event Handler
if ($delete) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.replace('../pesanan.php');</script>";exit();
} else {
    echo "Gagal hapus data...";
}

?>