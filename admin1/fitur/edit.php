
<?php
// Koneksi
include('../proses/connection.php');

// id dari query string
$id = $_GET['id'];

// Menampilkan data user yang dipilih
$query = mysqli_query($connect, "SELECT * FROM booking WHERE id='$id' ");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  
    <!-- My CSS -->
    <link rel="stylesheet" href="../style.css" />
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
      <a href="#" class="brand">
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
          <a href="../../index.php">
            <i class="bx bxs-doughnut-chart"></i>
            <span class="text">view website</span>
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
          <a href="#" class="logout">
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
    <div class="d-flex justify-content-center mt-5">
            <h2 class="text-primary fw-medium">Update Data</h2>
        </div>

            <table class="table mt-3 table-striped table-hover table table-bordered table-invoice-full">
            <!-- Form Update Data -->
            <form action="update.php" method="post">
                <!-- Di hidden untuk mengirim data secara spesifik ke update.php -->
                <input type="hidden" name="id" value="<?php echo $result[0]['id']; ?>">

                <div class="d-flex flex-row  column-gap-3">
                    <div class="form-floating mb-3">
                        <label for="nama" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemesan" required value="<?php echo $result[0]['nama']; ?>">
                        
                    </div>
                    <div class="form-floating mb-3">
                         <label for="noTelepon" class="form-label">No. Telepon</label>
                        <input type="text" class="form-control" id="noTelepon" name="no_telepon" placeholder="No. Telepon" required value="<?php echo $result[0]['no_telepon']; ?>">
                       
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center column-gap-3">
                    <div class="mb-3 w-25">
                        <label for="tanggal" class="form-label">Tanggal Pesan</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required value="<?php echo $result[0]['tanggal']; ?>">
                    </div>
                    <div class="mb-3 w-25">
                        <label for="waktu" class="form-label">Jam</label>
                        <input type="time" class="form-control" id="waktu" name="waktu" required value="<?php echo $result[0]['waktu']; ?>">
                    </div>
                    <div class="mb-3 w-50">
                        <label for="durasi" class="form-label">Durasi Sewa</label>
                        <input type="number" class="form-control" id="durasi" name="durasi" placeholder="*hitungan jam" required value="<?php echo $result[0]['durasi']; ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jumlahPemain" class="form-label">Jumlah Pemain</label>
                    <select class="form-select" name="jumlah_pemain" id="jumlahPemain">
                        <option value="10" <?php echo ($result[0]['jumlah_pemain'] == "10") ? 'selected' : ''; ?>>10 Orang</option>
                        <option value="20" <?php echo ($result[0]['jumlah_pemain'] == "20") ? 'selected' : ''; ?>>20 Orang</option>
                        <option value="30" <?php echo ($result[0]['jumlah_pemain'] == "30") ? 'selected' : ''; ?>>30 Orang</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="noLapangan" class="form-label">No. Lapangan</label>
                    <select class="form-select" name="no_lapangan" id="noLapangan">
                        <option value="1" <?php echo ($result[0]['no_lapangan'] == "1") ? 'selected' : ''; ?>>Lapangan 1</option>
                        <option value="2" <?php echo ($result[0]['no_lapangan'] == "2") ? 'selected' : ''; ?>>Lapangan 2</option>
                        <option value="3" <?php echo ($result[0]['no_lapangan'] == "3") ? 'selected' : ''; ?>>Lapangan 3</option>
                        <option value="4" <?php echo ($result[0]['no_lapangan'] == "4") ? 'selected' : ''; ?>>Lapangan 4</option>
                    </select>
                </div>
                <div class="d-flex flex-row justify-content-center gap-3">
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Bayar</label>
                        <input type="number" class="form-control" id="harga" name="harga" readonly value="<?php echo $result[0]['harga']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="deposito" class="form-label">Deposito</label>
                        <input type="text" class="form-control" id="deposito" name="deposito" required value="<?php echo $result[0]['deposito']; ?>">
                    </div>
                </div>
                <div class="mb-5">
                    <label for="keterangan" class="form-label">Keterangan <span class="text-secondary">*optional</span></label>
                    <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="3"><?php echo $result[0]['keterangan']; ?></textarea>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary col-2">Update</button>
                </div>
            </form>
</table>
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
