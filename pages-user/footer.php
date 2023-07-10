
<?php

// Koneksi database
include('../src/connection.php');
// Retrieve
$query = mysqli_query($connect, "SELECT * FROM pesan");
// Mengubah ke array multidimensi
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


<footer class="bg-secondary text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="../src/kirimpesan.php" method="POST">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>tulis sesuatu</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="text" name ="isipesan" id="form5Example29" class="form-control" />
              <label class="form-label" for="form5Example29">kirim pesan untuk Kami</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Kirim
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 bg-dark" >
    © 2023 Copyright:
    <a class="text-white" href="https://kesyapriansyah.vercel.app/">Kesy Apriansyah</a>
  </div>
  <!-- Copyright -->
</footer>