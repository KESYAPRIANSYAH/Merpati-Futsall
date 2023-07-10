
<?php
// Koneksi database
include('../proses/connection.php');
// Retrieve
$query = mysqli_query($connect, "SELECT * FROM booking");
// Mengubah ke array multidimensi
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- Bootstrap 5 & googlefont -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="../style.css?=<?php echo time(); ?>" />
    <link rel="icon" href="../../pages-user/image/Biru Putih Ilustrasi Logo Tim Olahraga.png" />
    <title>Admin Merpati Futsal</title>
  </head>
  <body>
    <!-- SIDEBAR -->
   





<section id="sidebar">
      <a href="" class="brand">
      <span><img src="../../pages-user/image/Biru Putih Ilustrasi Logo Tim Olahraga.png" class="imagelogo" alt=""></span>
      </a>
      <ul class="side-menu top">
        <li class="active">
          <a href="../home.php">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../pesanan.php">
            <i class="bx bxs-shopping-bag-alt"></i>
            <span class="text">Pesanan</span>
          </a>
        </li>
        <li>
          <a href="../../index.php" target="_blank">
            <i class="bx bxs-doughnut-chart"></i>
            <span class="text">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-message-dots"></i>
            <span class="text">Message</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-group"></i>
            <span class="text">Team</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="#">
            <i class="bx bxs-cog"></i>
            <span class="text">Settings</span>
          </a>
        </li>
        <li>
          <a href="./proses/logout.php" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
      <!-- NAVBAR -->
       <nav>
        <i class="bx bx-menu"></i>
        <a href="#" class="nav-link">Categories</a>
    
        </form>

 
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
       <div class="container" style="padding-top:100px">
    <h1 class="text-center">Booking Form</h1>
    <form action="../proses/insert.php" method="post">
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
      
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="../script.js"></script>
   <script src="../../src/script/harga.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
