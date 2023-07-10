<?php

// Koneksi database
include('./src/connection.php');
// Retrieve
$query = mysqli_query($connect, "SELECT * FROM pesan");
// Mengubah ke array multidimensi
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="./pages-user/image/Biru Putih Ilustrasi Logo Tim Olahraga.png" />
  <title>Merpati Futsal</title>
   <link rel="stylesheet" href="./pages-user/css/style.css?=<?php echo time(); ?>" /> 
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top  hover-overlay">
    <a class="navbar-brand font-weight-bold" href="#">Merpati<span class="text-white"> Futsal</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto ">
        <li class="nav-item active">
          <a class="nav-link  text-white" href="./index.php">Beranda</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white" href="./pages-user/booking.php">Sewa Lapangan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./pages-user/jadwal.php">Jadwal Lapangan</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white" href="./pages-user/Event.php">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./pages-user/Kontakkami.php">Kontak Kami</a>
        </li>
   
      </ul>
    <ul class="navbar-nav display-flex">
       <li class="nav-item">
          <a class="btn btn-light border-dark" href="./login/index.html">       <i class="bx bxs-log-in" style="margin-right:10px"></i>Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-secondary ml-md-2 mt-2 mt-md-0" href="./login/TambahUser.php">Register</a>
        </li>
    </ul>
           
    </div>
  </nav>


  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide " style="margin-top:50px" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./pages-user/image/gambar1.png" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./pages-user/image/gambar2.png" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./pages-user/image/gambar3.png" alt="Image 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <!-- Carousel -->


    <!-- card -->

<div class="container" >
    <h1 class="lapangan" >LAPANGAN KAMI </h1>
    <div class="row" >
      <div class="col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="./pages-user/image/lapangan/lapangan1.jpg" alt="Futsal Field 3">
          <div class="card-body">
            <h5 class="card-title">Lapangan 1</h5>
            <p class="card-text">Description of Futsal Field 1.</p>
              <a href="#" class="btn btn-warning text-light">View Details</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
         <img class="card-img-top" src="./pages-user/image/lapangan/lapangan2.jpg" alt="Futsal Field 3">
          <div class="card-body">
            <h5 class="card-title">Lapangan 2</h5>
            <p class="card-text">Description of Futsal Field 2.</p>
             <a href="#" class="btn btn-warning text-light">View Details</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
           <img class="card-img-top" src="./pages-user/image/lapangan/lapangantiga.jpg" alt="Futsal Field 3">
          
          <div class="card-body">
            <h5 class="card-title">Lapangan 3</h5>
            <p class="card-text">Description of Futsal Field 3.</p>
       <a href="#" class="btn btn-warning text-light">View Details</a>
          </div>
        </div>
      </div>
          <div class="col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="./pages-user/image/lapangan/lapangan4.jpg" alt="Futsal Field 3">
          <div class="card-body">
            <h5 class="card-title">Lapangan 4</h5>
            <p class="card-text">Description of Futsal Field 3.</p>
            <a href="#" class="btn btn-warning text-light">View Details</a>
          </div>
        </div>
      </div>         
        </div>
      </div>
    </div>
  </div>
    <!-- card -->

    <div class="container ">
      <h4>Lokasi Merpati Futsal</h4>
     <div className="map" style="margin-top:50px"> <iframe class="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15824.923399732646!2d108.75372566994353!3d-7.439690318434149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6581978688dc25%3A0x500f087addf79a4!2sMerpati%2088%20Futsal!5e0!3m2!1sid!2sid!4v1686311921952!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>

<!-- <footer> -->
<?php 

include("./footer.php");
?>
<!-- 
</footer> -->



 <script src="./src/script/harga.js"></script>
    <script>
    $(document).ready(function() {
      $('.carousel').carousel({
        interval: 3000 // Interval waktu autoplay (dalam milidetik)
      });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


