<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLBB TOURNAMENT</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
<body data-bs-spy="scroll" data-bs-target="#navbarNavDropdown">
      <nav class="navbar border-bottom border-3 z-3 border-white bg-dark navbar-expand-lg w-100 top-0 position-fixed shadow-lg" data-bs-theme="dark" id="nav">
          <a class="navbar-brand text-light" href="#article">
            <img src="./image/download.jpg" alt="Bootstrap" class="rounded-5 ms-4" style="height: 54px; width:54px;">
          </a>
          <a class="navbar-brand text-light" id="brand" href="#article">Mobile Legend bang-bang</a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item p-2">
                <a class="nav-link active fw-bold text-light" id="link1" aria-current="page" href="#hero">hero</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link fw-bold text-light" id="link2" href="#article">article</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link fw-bold text-light" id="link3" href="#gallery">gallery</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link border border-light border-2 bg-light text-dark rounded-5 px-2 fw-bold d-flex" id="login" href="./login.php">Login</a>
              </li>
              <li class="nav-item p-2">
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
        <section class="container-fluid bg-dark text-light w-100 py-5 d-flex align-items-center flex-column justify-content-center gap-2" id="hero">
          <div class="container mt-5 bg-secondary p-3">
            <h1 class="fw-bold text-light text-center">GALLERY</h1>
            <div id="carouselExampleCaptions" class="carousel slide w-100" data-bs-ride="true">
            <?php
              // Koneksi ke database
              include "koneksi.php";

              // Query untuk mengambil data gambar
              $sql = "SELECT * FROM gallery"; // Ganti "photos" dengan nama tabel Anda
              $hasil = $conn->query($sql);

              // Cek apakah data ditemukan
              if ($hasil->num_rows > 0) {
              ?>
              <div class="carousel-indicators mb-4">
                  <?php 
                  $index = 0;
                  while ($row = $hasil->fetch_assoc()) { 
                  ?>
                      <button 
                          type="button" 
                          data-bs-target="#carouselExampleCaptions" 
                          data-bs-slide-to="<?= $index ?>" 
                          class="<?= $index === 0 ? 'active' : '' ?>" 
                          aria-current="<?= $index === 0 ? 'true' : 'false' ?>" 
                          aria-label="Slide <?= $index + 1 ?>">
                      </button>
                  <?php 
                      $index++; 
                  } 
                  ?>
              </div>
              <?php 
              } else {
                  echo "Tidak ada foto tersedia.";
              }
              ?>
              <div class="carousel-inner py-0">
                <?php
                include "koneksi.php";
                $sql_gallery = "SELECT * FROM gallery ORDER BY tanggal asc";
                $hasil_gallery = $conn->query($sql_gallery);
                while($row = $hasil_gallery->fetch_assoc()){
                ?>
                <div class="carousel-item active" data-bs-interval="2000">
                  <img src="./image/<?=$row['gambar']?>" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?=$row['judul']?></h5>
                    <p><?=$row['isi']?></p>
                  </div>
                </div>
                <?php
                }
                ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>
        <!--hero start-->
        <section class="container-fluid bg-primary vh-100 w-100 py-5 d-flex justify-content-center align-items-center" id="article">
        <div class="row gap-5 mt-5 d-flex flex-row-reverse justify-content-center align-items-center">
        <div class="col-3 col-xs-10">
          <img src="./image/mlbb.jpeg" class="img-fluid sampul rounded-pill border border-5 border-light" alt="">
        </div>
            <div class="col-8 d-flex flex-column justify-content-cemter align-items-center">
              <h1 class="fw-bolder text-light text-center">MOBILE LEGEND BANG BANG INDONESIA</h1>
              <p class="text-center text-light px-5">mobile legend bang bang adalah salah satu game online mobile competitive moba 5 vs 5 yang terpopuler di indonesia. mobile legend telah banyak menyumbangkan medali medali untuk indonesia di cabang olahraga elektronik mobile legend</p>
              <div class="d-flex mb-4 gap-2">
                <div id="tanggal" class="bg-light text-dark px-3 py-2 rounded-pill"></div>
                <div id="jam" class="bg-light text-dark px-3 py-2 rounded-pill"></div>
              </div>
              <a href="#gallery" type="button" class="btn btn-outline-light btn-lg">SHOW TEAM</a>
          </div>
        </section>
        <!--hero end-->
        <!--article start-->
<section id="gallery" class="text-center p-5 bg-dark text-light">
  <div class="container-fluid w-100">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row justify-content-center">
      <?php
      include "koneksi.php";
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col-md-4 col-xl-2 col-lg-3 col-sm-6 col-xxs-8">
        <div class="card shadow-md border border-dark border-2">
                  <img src="image/<?= $row["Gambar"]?>" class="card-img-top img-fluid p-2" alt="...">
                  <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed  border border-dark border-5 bg-secondary text-light rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <h3><?= $row["Judul"]?></h3>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse">
                            <p class="mt-2" style="text-align:justify;"><?= $row["Isi"]?></p>
                            <div class="card-footer">
                                <small class="text-body-secondary">
                                    <?= $row["Tanggal"]?>
                                </small>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
        <!--article end-->
        <!--gallery start-->
        <!--gallery end-->
        <!--footer start-->
        <section class="container-fluid bg-dark text-light w-100 py-4 text-center border-top border-4" id="footer">
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
        <script src="./script.js"></script>
      </body>
</html>