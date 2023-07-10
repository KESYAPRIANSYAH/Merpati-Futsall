
<?php
// Koneksi database
include('./proses/connection.php');
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
    <link rel="stylesheet" href="style.css?=<?php echo time(); ?>" />

     <link rel="icon" href="../pages-user/image/Biru Putih Ilustrasi Logo Tim Olahraga.png" />
    <title> Admin Merpati Futsal</title>
  </head>
  <body>
    <!-- SIDEBAR -->
      <?php include ('./sidebar.php') ?>
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
        <div class="table-responsive flex-wrap">
          <h2 class="text-primary fw-medium text-center">Daftar Booking</h2>

          <div class="row mt-5">
            <div class="col-2 text-center">
              <!-- Fitur Retrieve/Tambah Data -->
              <a href="./fitur/booking.php"><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDataModal">Tambah Data</button></a>
            </div>
            <div class="col">
              <!-- Fitur Reset Data -->
              <a href="./proses/reset.php" onclick="return confirm('Apakah kamu yakin akan mereset data ?');"><button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tambahDataModal">Reset Data</button></a>
            </div>
            <div class="col-3">
              <!-- Fitur Search -->
              <form class="input-group align-items-bottom" role="search" action="./fitur/search.php" method="get">
                <input class="form-control" type="search" name="keyword" placeholder="Cari..." aria-label="Search" />
                <button class="btn btn-dark" type="submit">Cari</button>
              </form>
            </div>
          </div>

          <!-- Data -->
          <table class="table mt-3 table-striped table-hover table table-bordered table-invoice-full">
            <thead class="text-primary shadow-sm text-center">
              <tr>
                <th scope="col" class="head0">No.</th>
                <th scope="col" class="head0">Nama Pemesan</th>
                <th scope="col" class="head0">No. Telepon</th>
                <th scope="col" class="head0">Tanggal Pesan</th>
                <th scope="col" class="head0">Waktu</th>
                <th scope="col" class="head0">Durasi Sewa</th>
                <th scope="col" class="head0">Jumlah Pemain</th>
                <th scope="col" class="px-4 py-3">Nomor Lapangan</th>
                <th scope="col" class="head0">Harga Sewa</th>
                <th scope="col" class="head0">Deposito</th>
                <th scope="col" class="head0">Keterangan</th>
                <th scope="col" class="head0">Pilihan</th>
              </tr>
            </thead>
            <tbody>
              <!-- Menampilkan data dari database yang diubah ke array multidimensi -->
              <?php foreach ($result as $key =>
              $value) : ?>
              <tr>
                <td class="px-4"><?php echo $key + 1; ?></td>
                <td class="px-4"><?php echo $value['nama']; ?></td>
                <td class="px-4"><?php echo $value['no_telepon']; ?></td>
                <td class="px-4"><?php echo $value['tanggal']; ?></td>
                <td class="px-4"><?php echo $value['waktu']; ?></td>
                <td class="px-4"><?php echo $value['durasi']; ?></td>
                <td class="px-4"><?php echo $value['jumlah_pemain']; ?></td>
                <td class="px-4"><?php echo $value['no_lapangan']; ?></td>
                <td class="px-4"><?php echo $value['harga']; ?></td>
                <td class="px-4"><?php echo $value['deposito']; ?></td>
                <td class="px-4 col-2"><?php echo $value['keterangan']; ?></td>
                <td class="px-y col-2 text-center " >
                  <a href="./fitur/edit.php?id=<?php echo $value['id'] ?>"><button type="button" class="btn btn-success">Edit</button></a>
                  <a href="./proses/delete.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Apakah kamu ingin menghapusnya ?');"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
