
<?php
// Koneksi database
include('./proses/connection.php');
// Retrieve
$query = mysqli_query($connect, "SELECT * FROM booking");
    // Query untuk mengambil data dari tabel pesan

$hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);



    
    $sql = "SELECT COUNT(*) as id  FROM booking";
    $result = $connect->query($sql);

    // Menampilkan data ke dalam HTML
    $row = $result->fetch_assoc();
    $totalPesanan = $row['id'];
  


  
     $data = mysqli_query($connect, "SELECT * FROM booking");
     $jmlh = 0;
     while ($totalharga=$data-> fetch_array() ){
     $jmlh +=$totalharga["harga"];
     }
      
     $pendapatan = $jmlh;

  
     
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css?=<?php echo time(); ?>" />
    <link rel="icon" href="../pages-user/image/Biru Putih Ilustrasi Logo Tim Olahraga.png" />
    <title>Admin Merpati Futsal</title>
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
        <a href="#" class="nav-link ">Categories <?php ?></a>
    
        </form>

 
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Dashboard</h1>
          </div>
          <a href="./proses/logout.php" class="btn-download " style="background-color:red;">
            <i class="bx bxs-log-out"></i>
            <span class="text">Logout</span>
          </a>
        </div>

        <ul class="box-info">
          <li>
            <i class="bx bxs-calendar-check"></i>
            <span class="text">
              <h3><?php echo  $totalPesanan; ?></h3>
              <p>Order</p>
            </span>
          </li>
          <li>
            <i class="bx bxs-dollar-circle"></i>
            <span class="text">
              <h3><?php echo  $pendapatan; ?></h3>
              <p>Total Pendapatan</p>
            </span>
          </li>
        </ul>

        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Pesanan Terbaru</h3>
            </div>
            <table>
              <thead>
                <tr>
                  <th>nomer</th>
                  <th>Nama</th>
                  <th>Tanggal sewa</th>
                  <th>Nomor Telepon</th>
                    <th>Lapangan</th>
                 
                </tr>
              </thead>
              <tbody>
                 <?php foreach ($hasil as $key =>
              $value) : ?>
                <tr>
                <td class="px-4"><?php echo $key + 1; ?></td>
                <td class="px-4"><?php echo $value['nama']; ?></td>
                <td class="px-4"><?php echo $value['tanggal']; ?></td>
                <td class="px-4"><?php echo $value['no_telepon']; ?></td>
                <td class="px-4"><?php echo $value['no_lapangan']; ?></td>
                </tr>
                   <?php endforeach ?>
              </tbody>
            </table>
          </div>
        
        </div>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>
  </body>
</html>
