<?php
require_once "../setting/s_database.inc.php"; // memasukkan file seting database
require_once "../function/f_koneksidb.inc.php"; // mmasukkan file fungsi koneksidb
?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 

<h2>Select Table Login</h2>
<table border="1">
    <tr>
        <td colspan="3">Data User Login</td>
    </tr>
    <tr>
        <td>No</td>
        <td>Username</td>
        <td>Password</td>
    </tr>
    <?php
    $sql = "select * from login"; // perintah sql untuk melihat isi dari tabel login
    $hasil = $koneksidb->query($sql); // eksekusi perintah sql dan hasilnya di tampung pada variabel hasil
    if ($hasil->num_rows > 0){ // jika varibel hasil memiliki jumlah baris lebih dari 0
        $no=1;
        while ($baris = $hasil->fetch_assoc()){ 
    ?>
    <tr>
        <td><?php echo $no; $no++; ?></td>
        <td><?php echo $baris["username"]; ?></td>
        <td><?php echo $baris["password"]; ?></td>
    </tr>
    <?php
        }
    } else {
    ?>
    <tr>
        <td colspan="3">Belum Ada Datanya</td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
    echo "<p>Menuju ke:";
    echo "<ul>";
    echo "<li><a href='select.php'>Daftar Login</a></li>";
    echo "<li><a href='insert.php'>Tambah User Login</a></li>";
    echo "<li><a href='hapusakun.php'>Hapus User Login</a></li>";
    echo "</ul></p>";
?>
</body>
</html>