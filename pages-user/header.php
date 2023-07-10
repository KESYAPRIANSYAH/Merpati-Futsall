<?php 


// Koneksi database
include('../src/connection.php');




// Retrieve
$query = mysqli_query($connect, "SELECT * FROM booking");
// Mengubah ke array multidimensi
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);


?>


<header>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top font-weight-bold">
    <a class="navbar-brand font-weight-bold" href="#" id="logo">Merpati<span class="text-white"> Futsal</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto ">
        <li class="nav-tem active ">
          <a class="nav-link text-white" href="Home.php">Beranda</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white" href="booking.php">Sewa Lapangan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="jadwal.php">Jadwal Lapangan</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white" href="./Event.php">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="https://wa.link/k9wj7a">Kontak Kami</a>
        </li>
   
      </ul>
    <ul class="navbar-nav display-flex">
       <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle text-white"><i class="bx bxs-user"></i>  <span class="text">Welcome  <?php echo $_SESSION['username'] ?></span> <b class="caret"></b></a>
      <ul class="dropdown-menu bg-danger w-100">

         <li >
    
          <a class="text-white "  style="margin-left:20px" href="../login/logout.php">       <i class="bx bxs-log-out" style="margin-right:10px"></i>logout</a>
        </li>
      
        
    </ul>
           
    </div>
  </nav>


</header>