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
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
        <link rel="icon" href="./image/Biru Putih Ilustrasi Logo Tim Olahraga.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Merpati Futsal</title>
      <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/booking.css?=<?php echo time(); ?>">
</head>


<body>

<!-- <header> -->

  <?php include('./header.php');?>
  

  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide "  data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="content"><h5>Lapangan 1  </h5></div>
        <img class="d-block w-100" src="./image/lapangan/lapangan1.jpg" alt="Image 1">
      </div>
      <div class="carousel-item">
          <div class="content"><h5>Lapangan 2  </h5></div>
        <img class="d-block w-100" src="./image/lapangan/lapangan2.jpg" alt="Image 2">
      </div>
      <div class="carousel-item">
          <div class="content"><h5>Lapangan 3  </h5></div>
        <img class="d-block w-100" src="./image/lapangan/lapangantiga.jpg" alt="Image 3">
      </div>
        <div class="carousel-item">
          <div class="content"><h5>Lapangan 4  </h5></div>
        <img class="d-block w-100" src="./image/lapangan/lapangan4.jpg" alt="Image 4">
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
  





<!-- </header> -->




    <!-- card -->

<div class="container">
    <h1 class="text-center">Booking lapangan</h1>
    <form action="../src/insert.php" method="post">
      <div class="form-group">
        <label for="nama" class="form-label">Nama Pemesan</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemesan" required>
        
      <div class="form-group">
              <label for="noTelepon" class="form-label">No. Telepon</label>
             <input type="text" class="form-control" id="noTelepon" name="no_telepon" placeholder="No. Telepon" required>
                  
      </div>
      <div class="form-group">
         <label for="tanggal" class="form-label">Tanggal Pesan</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
      </div>
      <div class="form-group">
     <label for="noLapangan" class="form-label">No. Lapangan</label>
                    <select class="form-select" name="no_lapangan" id="noLapangan">
                        <option value="1">Lapangan 1</option>
                        <option value="2">Lapangan 2</option>
                        <option value="3">Lapangan 3</option>
                        <option value="4">Lapangan 4</option>
              
                    </select>
      </div>
      <div class="form-group">
         <label for="waktu" class="form-label">Jam</label>
         <input type="time" class="form-control" id="waktu" name="waktu" required>
      </div>
      <div class="form-group">
        <label for="durasi" class="form-label">Durasi Sewa</label>
        <input type="number" class="form-control" id="durasi" name="durasi" placeholder="*hitungan jam" required>
      <div class="form-group">
        <label for="jumlahPemain" class="form-label">Jumlah Pemain</label>
                    <select class="form-select" name="jumlah_pemain" id="jumlahPemain">
                        <option value="10">10 Orang</option>
                        <option value="20">20 Orang</option>
                        <option value="30">30 Orang</option>
                    </select>
      </div>
      <label for="harga" class="form-label">Harga Bayar</label>
      <input type="number" class="form-control" id="harga" name="harga" readonly>
      <div class="form-group">
         <label for="deposito" class="form-label">Deposito</label>
         <input type="text" class="form-control" id="deposito" name="deposito" required>
      </div>
      <div class="form-group">
        <l<label for="keterangan" class="form-label">Keterangan <span class="text-secondary">*optional</span></label>
         <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-warning text-light">Submit</button>
    </form>
  </div>




    <!-- <footer> -->



    <!-- </footer> -->
 <script src="./script/harga.js?=<?php echo time(); ?>"></script>
 
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


