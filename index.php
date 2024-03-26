<?php
$nama='ICESIT';
?>

<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ICESIT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  
  <!-- Logo Icesit -->
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    background-color: #EEEEEE;
}

.header {
    background-color: #7A3E3E;
}

.nav-link.active.mx-1 {
    font-weight: 600;
    font-size: 15px;
}


.padding-start {
    position: relative;
    right: 0%;
}

.image-sizing {
    width: 50%;
    height: auto;
}

.c-item{
  height: 480px;
}

.c-img{
  height: 100%;
  object-fit: cover;
  filter: brightness(0.6);
}

.horizontal_center{
  
  border-top: 2px solid rgb(100, 76, 76);
  margin-right: auto;
  margin-left: auto;
  margin-top: 50px;
  margin-bottom: 70px;
  width : 300px;
 }


@media (min-width: 600px) {
    .padding-start {
      position: relative;
      right: 6%;
    }

    .image-sizing {
        width: 40%;
        height: auto;
    }
  }

  
  p {
    margin-bottom: 50px;
  }

  .footer {
    position: fixed;
    left: 0;
    bottom: 10;
    width: 100%;
    background-color: #7A3E3E;
    color: white;
    text-align: center;
 }


</style>
  <!-- Navbar -->
</head>

<body>

  <section class="header w-100">
    <nav class="navbar navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active mx-1" aria-current="page" href="#">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-1" aria-current="page" a href="callforpaper.html">Call For Paper</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-1" aria-current="page" a href="registration.html">Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-1" aria-current="page" a href="committes.html">Commites</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-1" aria-current="page" href="#">Partner & Sponsorship</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-1" aria-current="page" href="#">Location & Accomondation</a>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </nav>
  </section>

  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="assets/img/slide3.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-2 mt-4 d-none d-md-block">
          <h1 class="display-1 fw-bolder text-capitalize">WELCOME TO <?php echo $nama; ?> 2023</h1>
          <p  class="mt-5 fs-3 text-uppercase">INTERNATIONAL CONFERENCE</p>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="assets/img/slide2.jpg" class="d-block w-100 c-img" alt="...">
      </div>
      <div class="carousel-item c-item">
        <img src="assets/img/slide1.jpg" class="d-block w-100 c-img" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <br>
  <!-- text -->


  <div class="container">
    <div class="row ">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <body>

        <div class="horizontal_center"></div>



        <!-- Home -->
        <br>
        <div class="text-justify row">
          <div class="col-md-6 col-xs-12 text-justify">
            <div class="text-center mt-2 mb-5">
              <h1 style="font-size:20px"><b>HOME</h1></b>
            </div>
            <p class="text-justify" style="font-size:18px; text-align: justify;">We are pleased to inform you that the
              International Conference on Engineering Science, Innovation Technology, and Sustainability 2023 (<?= $nama ?>
              2023) will be held on 26th-27th October 2023 at Yogyakarta, Indonesia.</p>
            <p style="font-size:18px; text-align: justify;">We would like to invite you to be a part of this exciting
              event of Mercu Buana University (UMB), Indonesia. We assure you that it will be one of your most pleasing
              and memorable experience.</p>
            <p style="font-size:18px; text-align: justify;">Selected papers will be published in IOP Conference Series
              indexed by Scopus. After review, all remain papers will be published in … with index in ESJIndex, Google
              Scholar, and ROAD Directory of Open Access Scholarly Resources.</p>
          </div>

          <!-- Theme -->
          <div class="col-md-6 col-xs-12 text-justify">
            <div class="text-center mt-2 mb-5">
              <h1 style="font-size:20px"><b>THEME</h1></b>
            </div>
            <p style="font-size:18px; text-align: center;">“Sustainable Energy & Technology Innovation to Achieve
              Sustainable Development Goals”</p>
            <div class=" justify-content-center text-center">
              <img class="image-sizing justify-content-center text-center" src="assets/img/logo_icesit.png">
            </div>
          </div>
        </div>
          </div>
        </div>



        <div class="text-center mt-4 pt-4 mb-5">

          <body>

            <section class="venue" id="venue">
              <div class="container">
                <div class="box-venue">
                  <div class="box" data-aos="fade-right" data-aos-duration="1000">
                    <div class="text-center mt-4 pt-4 mb-5">
                      <h1 style="font-size:20px;"><b>VENUE</h1></b>
                    </div>
                    <div class="text-justify row">
                      <div class="col-md-6 col-xs-12 text-justify">
                        <p class="text-justify" style="font-size:18px; text-align: justify;">Jl. Gowongan Kidul,
                          Sosromenduran,
                          Gedong Tengen, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55271
                          (26th – 27th October 2023).</p>
                        <p style="font-size:18px; text-align: justify;">The International Conference on Engineering
                          Science,
                          Innovation Technology, and Sustainability 2023
                          (ICESIT 2023) will be held in 26th-27th October 2023 at Yogyakarta, Indonesia. ICESIT 2017 is
                          organized
                          by Faculty of Engineering, Universitas Mercu Buana in cooperation with xx.</p>
                      </div>
                      <div class="col-md-6 col-xs-12 text-justify">
                        <p style="font-size:18px; text-align: justify;">The <?= $nama ?> 2023 aims to provide a platform for
                          participants an interdisciplinary research and innovations from academia and industry with
                          related
                          topics for submission include, but not limited to:</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </body>
        </div>
    </div>

 



    </div>

  </br>
    
</body>

<footer class="text-center text-white" style="background-color: rgba(73, 57, 32, 0.2);">
  <div class="text-center p-3" style="background-color: #7A3E3E;">
    Copyright @2023 International Conference on Engineering Science, Innovation Technology, and Sustainability ( <?= $nama ?> ) 2023
  </div>
  <!-- Copyright -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
  integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
  crossorigin="anonymous"></script>

</html>

<?php
$nama='ICESIT';
?>