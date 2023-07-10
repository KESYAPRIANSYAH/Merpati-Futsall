<?php
require_once "../function/f_validation.inc.php"; // memasukkan file fungsi cek validasi
require_once "../setting/s_database.inc.php"; // memasukkan file setting database
require_once "../function/f_koneksidb.inc.php"; // memasukkan file fungsi koneksidb

// Deklarasi variabel
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){ // Jika form disubmit menggunakan metode post
    $username = test_input($_POST["username"]); // cek kevalidan data pada variabel username dengan menggunakan fungsi test_input
    $password = test_input($_POST["password"]); // cek kevalidan data pada variabel password dengan menggunakan fungsi test_input

    $sql = "insert into login values ('".$username."','".md5($password)."')";
    if ($koneksidb->query($sql) === TRUE) {
      echo '<script>alert("Akun Berhasil Dibuat");</script>';
    echo '<script>window.location.href = "index.html";</script>';
    exit();
      } else {
        echo '<script>alert("username sudah ada");</script>';
       echo '<script>window.location.href = "TambahUser.php";</script>';
    }
} else {
?>


<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../pages-user/image/Biru Putih Ilustrasi Logo Tim Olahraga.png" />
  <title>Daftar Akun</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/daftar.css">
</head>
<body>
  
  <div class="container" style="margin-top: 200px">
    <div class="row justify-content-center mt-5 " >
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="text-center">Create an Account</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control"  id="regUsername" name="username" required >
              </div>
             
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="regPassword" name="password" required>
              </div>
          
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
            </form>
             <div class="switch-form">
               <span class="text-dark">Sudah punya akun?</span>
        <a href="index.html
        ">Login disini.</a>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
