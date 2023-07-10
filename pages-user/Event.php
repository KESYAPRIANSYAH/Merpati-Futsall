<?php
session_start();
if (!isset($_SESSION["login"])) {
  
   header("location:../login/index.html");


}


// Koneksi database
include('../src/connection.php');







?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./image/Biru Putih Ilustrasi Logo Tim Olahraga.png" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
     <link href="./css/event.css?=<?php echo time(); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Merpati Futsal</title>
      <style>
        .video-container {
            position: relative;
            padding-bottom: 40%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            margin-top:100px;
           
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <?php include("./header.php")?>
    


    <!-- content -->
 <div class="video-container">
        <video autoplay muted loop>
            <source src="../login/image/futsal.mp4" type="video/mp4">
        </video>
    </div>

    <div class="judul mt-5 text-center">Event Terbaru</div>

<div class="container" >
  <div class="row">
    <div class="col-sm">
   <img src="./image/lapangan/lapangan1.jpg" alt="gambar">
    </div>
    <div class="col-sm">
      <h1>Fitri Cup</h1>
      <h5>fitri cup adalah turnament yang diadakan merpati futsal setiap hari raya idul fitri</h5>
      <a href="" class="btn bg-warning text-white mt-5">Lihat Lebih Lanjut</a>
    </div>
   
  </div>
</div>

<div class="container" >
  <div class="row">
    <div class="col-sm">
   <img src="./image/lapangan/lapangan1.jpg" alt="gambar">
    </div>
    <div class="col-sm">
      <h1>April Cup</h1>
      <h5>adalah turnament yang diadakan merpati futsal setiap Bulan kelahiran Merpati Futsal</h5>
      <a href="" class="btn bg-warning text-white mt-5">Lihat Lebih Lanjut</a>
    </div>
   
  </div>
</div>

<div class="container" >
  <div class="row">
    <div class="col-sm">
   <img src="./image/lapangan/lapangan1.jpg" alt="gambar">
    </div>
    <div class="col-sm">
      <h1>La liga</h1>
      <h5>adalah turnament yang diadakan merpati futsal setiap bulan Agustus Untuk memeriahkan Hari Kemerdekaan Indonesia </h5>
      <a href="" class="btn bg-warning text-white mt-5">Lihat Lebih Lanjut</a>
    </div>
   
  </div>
</div>

<div class="container" >
  <div class="row">
    <div class="col-sm">
   <img src="./image/lapangan/lapangan1.jpg" alt="gambar">
    </div>
    <div class="col-sm">
      <h1>bonus</h1>
      <h5>tukarkan 10 Voucher yang diperoleh setiap booking lapangan dengan gratis 1 jam main di merpati futsal</h5>
      <a href="" class="btn bg-warning text-white mt-5">Lihat Lebih Lanjut</a>
    </div>
   
  </div>
</div>



    <!-- content -->

<!-- <footer> -->

<?php include("./footer.php") ?>

<!-- </footer> -->
     
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>