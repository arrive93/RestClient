<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<title>Sisfo Mahasiswa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="<?php echo site_url(); ?>" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="<?php echo site_url('mahasiswa'); ?>" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>Mahasiswa</p>
  </a>
  <a href="<?php echo site_url('dosen'); ?>" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>Dosen</p>
  </a>
  <a href="<?php echo site_url('matakuliah'); ?>" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>Mata Kuliah</p>
  </a>
  <a href="<?php echo site_url('krs'); ?>" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>KRS</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="<?php echo site_url(); ?>" class="w3-bar-item w3-button" style="width:25% !important">Home</a>
    <a href<?php echo site_url('mahasiswa'); ?>" class="w3-bar-item w3-button" style="width:25% !important">Mahasiswa</a>
    <a href="<?php echo site_url('dosen'); ?>" class="w3-bar-item w3-button" style="width:25% !important">Dosen</a>
    <a href="<?php echo site_url('matakuliah'); ?>" class="w3-bar-item w3-button" style="width:25% !important">Mata Kuliah</a>
    <a href="<?php echo site_url('krs'); ?>" class="w3-bar-item w3-button" style="width:25% !important">KRS</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Tugas</span> Web Service </h1>
    <p>Sistem Informasi Akademik Sederhana</p>
    <!--<img src="/w3images/man_smoke.jpg" alt="boy" class="w3-image" width="992" height="1108">-->
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Selamat Datang</h2>
    <hr style="width:240px" class="w3-opacity">
    <p>Selamat datang di web sederhana kami. Web ini dibuat dengan tujuan memenuhi tugas mata kuliah Web Sevice. Terima kasih, dan apabila kurang sempurna maka mohon untuk saran agar kami bisa memperbaiki.
    </p>
    
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">Anggota Kelompok</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
		<div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Anggota 1</li>
          <li class="w3-padding-16">15.01.53.0034</li>
          <li class="w3-padding-16">M. Teguh Santoso</li>
          <li class="w3-padding-16">Fakultas Teknologi Informasi</li>
          <li class="w3-padding-16">S1-Teknik Informatika</li>
         
        </ul>
      </div>
	  
	  <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Anggota 2</li>
          <li class="w3-padding-16">15.01.53.0052</li>
          <li class="w3-padding-16">Mega Puspita Sari</li>
          <li class="w3-padding-16">Fakultas Teknologi Informasi</li>
          <li class="w3-padding-16">S1-Teknik Informatika</li>
         
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
   
   <div class="w3-row-padding" style="margin:0 -16px">
		 
	  <div class="w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Anggota 3</li>
          <li class="w3-padding-16">15.01.53.0064</li>
          <li class="w3-padding-16">Arif Budi Setiawan</li>
          <li class="w3-padding-16">Fakultas Teknologi Informasi</li>
          <li class="w3-padding-16">S1-Teknik Informatika</li>
         
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
  

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
