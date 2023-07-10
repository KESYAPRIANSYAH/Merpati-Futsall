<?php
require_once "../function/f_validation.inc.php"; // memasukkan file fungsi cek validasi
require_once "../setting/s_database.inc.php"; // memasukkan file setting database
require_once "../function/f_koneksidb.inc.php"; // memasukkan file fungsi koneksidb

// Deklarasi variabel
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){ // Jika form disubmit menggunakan metode post
    $username = test_input($_POST["username"]); // cek kevalidan data pada variabel username dengan menggunakan fungsi test_input

    $sql = "delete from login where username = '".$username."'";
    if ($koneksidb->query($sql) === TRUE) {
        echo "1 baris record telah berhasil di hapus";
      } else {
        echo "Error: " . $sql . "<br>" . $koneksidb->error;
    }
    echo "<p>Menuju ke:";
    echo "<ul>";
    echo "<li><a href='select.php'>Daftar Login</a></li>";
    echo "<li><a href='insert.php'>Tambah User Login</a></li>";
    echo "<li><a href='delete.php'>Hapus User Login</a></li>";
    echo "</ul></p>";
} else {
?>

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 

<h2>Delete data untuk tabel login</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">  
<!-- Keterangan -->
<!--
Fungsi htmlspecialchars() mengubah karakter khusus menjadi entitas HTML. 
Ini berarti akan mengganti karakter HTML seperti < dan > dengan &lt; dan &gt;. 
Ini akan mencegah penyerang mengeksploitasi kode dengan menyuntikkan kode HTML atau Javascript
(Cross-site Scripting attacks) ke dalam formulir.

$_SERVER["PHP_SELF"] adalah variabel super global yang hasilnya mengembalikan nama file dari skrip 
yang sedang dijalankan. Jadi, dengan cara ini $_SERVER["PHP_SELF"] pengguna dapat mengirimkan data dari
formulir ke halaman itu sendiri, alih-alih melompat ke halaman lain.
-->
  Username yang akan di hapus: <input type="text" name="username">
  <br><br>
  <input type="submit" name="submit" value="Hapus">  
</form>

</body>
</html>
<?php
}
?>