<?php
// condition statemen agar file tidak bisa di direct acces
if ($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    die ("<h2>Access Denied!</h2> This file is protected and not available to public.");
}

function test_input($data) {
/* Fungsi ini berguna untuk memastikan bahwa data yang diinputkan adalah data yang
1. Terbebas dari spasi yang berlebih, tab, dan baris baru
2. Terbebas dari backslashes (\)
3. Terbebas dari karakter khusus HTML, contohnya < >
*/ 
    $data = trim($data); // bebas no 1
    $data = stripslashes($data); // bebas no 2
    $data = htmlspecialchars($data); // bebas no 3
    return $data; // mengembalikan ke variabel sebagai data yang telah bersih
}
?>