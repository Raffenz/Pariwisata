<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pariwisata</title>
    <!-- Link Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Trirong"
    />
    <link rel="stylesheet" href="styles.css" />

    <link rel="stylesheet" href="dua.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <header>
      <div class="hero">
        <img
          src="images/calculator-header.jpg"
          alt="Hero Image"
          class="img-fluid"
        />
        <div class="hero-text">
          <h1>DISCOVER INDONESIA</h1>
          <p>
            "Embark on a journey through the enchanting archipelago of
            Indonesia. From the pristine beaches of Bali to the lush rainforests
            of Borneo, Indonesia offers a diverse array of experiences for every
            traveler. Explore ancient temples, vibrant cultures, and stunning
            natural wonders. Whether you seek adventure, relaxation, or cultural
            immersion, Indonesia promises an unforgettable adventure. Discover
            the heart of Southeast Asia and let the beauty of Indonesia
            captivate your soul."
          </p>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Start Your Journey</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Paket Wisata</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="pemesanan.php">Pemesanan</a></li>
          <li class="nav-item">
            <a class="nav-link" href="daftar_pesanan.php">Modifikasi Pesanan</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Contacts</a></li>
        </ul>
      </div>
    </nav>

    <!--card-->
    <section id="card">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col mb-5">
            <div class="card h-100">
              <img
                src="images/5d8c64544d656.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Pulau Komodo</h5>
                <p class="card-text">
                  Pulau Komodo, bagian dari Taman Nasional Komodo, terkenal
                  dengan habitat alami komodo, kadal terbesar di dunia. Nikmati
                  keindahan alam yang menakjubkan, dari pantai berpasir merah
                  muda hingga dunia bawah laut yang memukau. Pulau ini adalah
                  surga bagi pecinta alam dan petualang sejati.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100 text-center">
              <img src="images/D.toba.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Danau Toba</h5>
                <p class="card-text">
                  Danau Toba adalah danau vulkanik terbesar di dunia yang
                  terletak di Sumatera Utara, Indonesia. Dikelilingi oleh
                  pegunungan yang hijau dan dihiasi dengan pulau Samosir di
                  tengahnya, Danau Toba menawarkan pemandangan yang memukau dan
                  udara yang sejuk. Tempat ini menjadi destinasi wisata favorit
                  untuk bersantai, menikmati keindahan alam, dan menyelami
                  budaya Batak yang kaya.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100 text-end">
              <iframe
                width="355"
                height="220"
                src="https://www.youtube.com/embed/VOFo8J7h2Kg?si=OCRSxryJoeTxsfwd"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
              <div class="card-body">
                <h5 class="card-title">20 BEST PLACES TO VISIT IN INDONESIA - WISATA TERBAIK DI INDONESIA (INDONESIA TOURISM)</h5>
                <p class="card-text">
                "20 Best Places to Visit in Indonesia - Wisata Terbaik di Indonesia" adalah panduan lengkap untuk menjelajahi destinasi wisata paling menakjubkan di Indonesia. Dari keindahan alam, budaya yang kaya, hingga petualangan eksotis, temukan tempat-tempat terbaik yang wajib dikunjungi untuk pengalaman tak terlupakan di negeri yang penuh pesona ini. Mari jelajahi surga tersembunyi dan keajaiban alam Indonesia dalam satu perjalanan epik!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </section>
    <!--End card-->

    <!--footer-->
<footer class="bg-dark text-white mb-3">
    <div class="container">
      <div class="row p-3">
        <div class="col-sm-8 col-xxl-9">
          <div class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram"
              viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
            <a class="m-3 text-white" href="#">@discoverindonesia.id</a>
          </div>
   
          <div class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter"
              viewBox="0 0 16 16">
              <path
                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
            <a class="m-3 text-white">+6287888888888</a>
          </div>
        </div>
   
        <div class="col-sm-4 col-xxl-3 text-end mb-3">
          Jl. Jamin Ginting no. 100 Medan 
          20133
        </div>
      </div>
    </div>
   
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 Copyright: Discover Indonesia
      </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
