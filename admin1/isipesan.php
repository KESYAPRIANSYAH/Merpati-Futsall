
<?php
// Koneksi database
include('./proses/connection.php');
// Retrieve
$query = mysqli_query($connect, "SELECT * FROM booking");
    // Query untuk mengambil data dari tabel pesan
    $sql = "SELECT id, isipesan FROM pesan";
    $result = $connect->query($sql);

    // Menampilkan data ke dalam HTML
    $row = $result->fetch_assoc();


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
        <a href="#" class="nav-link">Categories</a>
    
        </form>

 
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>

        <table class="table mt-3 table-striped table-hover table table-bordered table-invoice-full">
            <thead class="text-primary shadow-sm text-center">
              <tr>
                <th scope="col" class="head0">No.</th>
                <th scope="col" class="head0">isi pesan</th>
               
              </tr>
            </thead>
            <tbody>
              <!-- Menampilkan data dari database yang diubah ke array multidimensi -->
              <?php foreach ($result as $key =>
              $value) : ?>
              <tr>
                <td class="px-4 text-center"><?php echo $key + 1; ?></td>
                <td class="px-4 text-center"><?php echo $value['isipesan']; ?></td>
                     <td class="px-y col-2 text-center">
                  
                  <a href="./proses/hapuspesan.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Apakah kamu ingin menghapusnya ?');"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
              </tr>
         
              <?php endforeach ?>
              
            </tbody>
          </table>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
