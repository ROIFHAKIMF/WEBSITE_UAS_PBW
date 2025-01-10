<?php
session_start();

include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
	header("location:login.php"); 
} 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLBB TOURNAMENT</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNavDropdown" data-bs-offset="300" tabindex="0">
    <nav class="navbar border-bottom border-3 z-3 border-white bg-dark navbar-expand-lg w-100 top-0 position-fixed shadow-lg" data-bs-theme="dark" id="nav">
        <a class="navbar-brand text-light" href="#article">
            <img src="./image/download.jpg" alt="Bootstrap" class="rounded-5 ms-4" style="height: 54px; width:54px;">
        </a>
        <a class="navbar-brand text-light" id="brand" href="./index.php">Mobile Legend bang-bang</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto mb-2 me-3 d-flex gap-2 mb-lg-0 text-dark">
            <li class="nav-item">
                <a class="nav-link fw-bold text-light" id="link1" href="admin.php?page=dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold text-light" id="link2" href="admin.php?page=article">Article</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link fw-bold text-light" id="link3" href="admin.php?page=gallery">Gallery</a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                </ul>
            </li> 
            <li>
            <div class="switchmode d-flex gap-3">
                <button id="togglemode" class="darkmode btn btn-light rounded-pill text-dark fs-4">
                    <i id="iconmode" class="bi bi-moon-fill"></i>
                </button>
                </div>
            </li>
            </ul>
        </div>
    </nav>
        <!--nav end-->
        <section class="container-fluid bg-dark text-light min-vh-100 w-100 text-light py-5 d-flex justify-content-center align-items-center flex-column gap-2" id="content">
            <div class="container text-center pt-5"> 
            <?php
            if(isset($_GET['page'])){
            ?>
                <h4 class="lead display-6 pb-2 fw-bold"><?= ucfirst($_GET['page'])?></h4>
                <?php
                include($_GET['page'].".php");
            }else{
            ?>
                <h4 class="lead display-6 pb-2 fw-bold">Dashboard</h4>
                <?php
                include("dashboard.php");
            }
            ?>
            </div> 
        </section>
        <!--footer start-->
        <section class="container-fluid bg-dark text-light w-100 py-4 text-center border-top border-4 border-light" id="footer">
          <div class="foot-icon d-flex flex-row justify-content-center align-items-center gap-4">
            <div class="icon1">
              <i class="bi bi-whatsapp fs-4"></i>
              <p>089604987923</p>
            </div>
            <div class="icon2">
              <i class="bi bi-tiktok fs-4"></i>
              <p>roif_hakim</p>
            </div>
            <div class="icon3">
              <i class="bi bi-instagram fs-4"></i>
              <p>@roif_hakim</p>
            </div>
          </div>
            <h6 class="align-self-center">Copyright©️ Ro'if hakim f.2024</h6>
        </section>
        <!--footer end-->
        <script src="./admin.js"></script>
      </body>
</html>