<?php
// condition statemen agar file tidak bisa di direct acces
if ($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    die ("<h2>Access Denied!</h2> This file is protected and not available to public.");
}

// membuat koneksi
$koneksidb = new mysqli($servernamedb, $usernamedb, $passworddb, $dbname);

// cek, apakah koneksi dapat terbentuk
if ($koneksidb->connect_error) {
    die ("Connection failed: " . $koneksidb->connect_error);
}
?>