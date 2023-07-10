<?php
require_once "../setting/s_database.inc.php"; // memasukkan file seting database
require_once "../function/f_koneksidb.inc.php"; // mmasukkan file fungsi koneksidb

if (isset($_POST["awal"])){
 $username = $_POST["awal"];
 $password = md5($_POST["akhir"]);

 $sql = "select * from loginadmin where username='".$username."' and password='".$password."'"; // perintah sql untuk melihat isi dari tabel login
 $hasil = $koneksidb->query($sql); // eksekusi perintah sql dan hasilnya di tampung pada variabel hasil

 if ($hasil->num_rows > 0){
  header("location:home.php");
 } else {

   echo '<script>alert("Login gagal. Silakan cek kembali username dan password!");</script>';
    echo '<script>window.location.href = "./loginadmin.html";</script>';
    exit();
 }
} else {
 echo "ERROR.. Anda harus lewat form login dulu..<br>";
 echo "<br><a href=\"form-login.html\">Login Kembali</a>";
}
?>