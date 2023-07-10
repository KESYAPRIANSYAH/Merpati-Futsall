
<?php
session_start();
if (!isset($_SESSION["login"])) {
  
   header("location:../login/index.html");


}


// Koneksi database
include('../src/connection.php');




// Retrieve
$query = mysqli_query($connect, "SELECT * FROM booking");
// Mengubah ke array multidimensi
$hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="./css/jadwal.css?=<?php echo time(); ?>" rel="stylesheet" />
      <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="icon" href="./image/Biru Putih Ilustrasi Logo Tim Olahraga.png" />
    <title>Merpati Futsal</title>
</head>
<body>
    <?php include("./header.php")?>
  


<main class="content"><h1>Jadwal Lapangan</h1>
<div class="jadwal">

</div>

</main>







   <div class="container ">
          <div class="order">
            <div class="head">
              
            </div>
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                    <th>Lapangan</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Nama</th>
                </tr>
              </thead>
              <tbody>
                 <?php foreach ($hasil as $key =>
              $value) : ?>
                <tr>
                    <td class="px-4"><?php echo $value['no_lapangan']; ?></td>
                    <td class="px-4"><?php echo $value['tanggal']; ?></td>
                    <td class="px-4"><?php echo $value['waktu']; ?></td>
                    <td class="px-4"><?php echo $value['nama']; ?></td>
              
              
                </tr>
                   <?php endforeach ?>
              </tbody>
            </table>
          </div>
        
        </div>




  <!-- <footer> -->

<footer class="bg-secondary text-center text-white">

  <!-- Copyright -->
  <div class="text-center p-3 " style="background-color:#001725;" >
    © 2023 Copyright:
    <a class="text-white" href="https://kesyapriansyah.vercel.app/">Kesy Apriansyah</a>
  </div>
  <!-- Copyright -->
</footer>
  <!-- </footer> -->
    <script src="./src/script/harga.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>