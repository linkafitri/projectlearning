<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Goggle Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Open+Sans:wght@300;400&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

    <!-- Box Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/style-user.css')}}" />

    <!-- Fav-icon -->
    <link rel="shortcut icon" href="{{asset('backend/images/favourite.png')}}" />

    <!-- using-Font-Awesome -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <title>Dapoer Umma Resto</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
        <div class="container">
          <a class="navbar-brand" href="#"><span>DAPOER</span>UMMA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end align-items-lg-center" id="navbarNavAltMarkup">
            <div class="navbar-nav me-5">
              <a class="nav-link me-4" href="#home">Home</a>
              <a class="nav-link me-4" href="#jadwal">Jadwal</a>
              <a class="nav-link me-4" href="#product">Menu</a>
              <a class="nav-link me-4" href="#testimonial">Testimonials</a>
            </div>
            <div class="btn-login me-4">
              <a href="{{ route('login') }}" class="login">Login</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- Home -->
    <section class="home" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-lg-flex flex-lg-column content-left">
            <!-- justify-content-end -->
            <h1 class="heading">DAPOER UMMA RESTO</h1>
            <p class="subheading text-white">Menyediakan beragam makanan Timur Tengah dengan rasa yang sudah disesuaikan dengan lidah Indonesia</p>
            <div class="btn-home mt-5">
              <a href="https://wa.me/628170502540" class="btn btn-buy py-2 px-3 py-lg-3 px-lg-4">FOR ASK</a>
              <a href="#" class="btn btn-learn py-2 px-3 py-lg-3 px-lg-4">Learn More</a>
            </div>
          </div>
          <div class="col-lg-6 position-relative d-none d-lg-block">
            <img src="{{asset('backend/images/home-img.jpg')}}" class="img-fluid position-absolute" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Jadwal Buka -->
    <section class="jadwal section-margin" id="jadwal">
      <div class="row">
        <div class="col text-center">
          <h1 class="heading">JADWAL BUKA</h1>
          <p class="subheading">Senin pukul 11.00 - 21.00</p>
          <p class="subheading">Selasa pukul 11.00 - 21.00</p>
          <p class="subheading">Rabu pukul 11.00 - 21.00</p>
          <p class="subheading">Kamis pukul 11.00 - 21.00</p>
          <p class="subheading">Jumat pukul 11.00 - 21.00</p>
          <p class="subheading">Sabtu pukul 11.00 - 22.00</p>
          <p class="subheading">Minggu pukul 11.00 - 22.00</p>
        </div>
      </div>
    </section>

    <!-- Banner -->
    <section class="banner2 section-margin">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1 class="heading">Promo</h1>
          </div>
        </div>
      </div>
      <div class="banner2">
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-6 text-white">
              <div class="banner-wrapper rounded-3 py-4 px-3 d-flex justify-content-between align-items-center">
                <div class="content-left">
                  <p class="label">Hot Deal</p>
                  <h1 class="heading">Kebuli Jordan + Chicken Roasted</h1>
                  <div class="price d-flex justify-content-between align-items-center mt-4">
                    <p class="normal">Rp 50.000</p>
                    <p class="promo">Rp 25.000</p>
                  </div>
                </div>
                <div class="content-right">
                  <img src="{{asset('backend/images/kebuli-landscape.jpg')}}" height="150" width="250" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-6 text-white mt-3 mt-lg-0">
              <div class="banner-wrapper rounded-3 py-4 px-3 d-flex justify-content-between align-items-center">
                <div class="content-left">
                  <p class="label">Hot Deal</p>
                  <h1 class="heading">Kebuli Jordan + Chicken Roasted</h1>
                  <div class="price d-flex justify-content-between align-items-center mt-4">
                    <p class="normal">Rp 50.000</p>
                    <p class="promo">Rp 25.000</p>
                  </div>
                </div>
                <div class="content-right">
                  <img src="{{asset('backend/images/kebuli-landscape.jpg')}}" height="150" width="250" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- service -->
    <section class="service section-margin" id="service">
      <div class="container">
        <div class="col text-center mt-5">
          <h1 class="heading">BEST SELLER</h1>
        </div>
        <div class="col text-center">
          <h1 class="heading"></h1>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
              <div class="detail">
                <p class="label">Makanan Berat</p>
                <h3 class="heading">KEBULI AYAM BAKAR</h3>
                <a href="#" class="btn-service btn mt-4"><i class="bx bx-shopping-bag"></i> Shop</a>
              </div>
              <div class="img-service">
                <img src="{{asset('backend/images/briyani-animasi.png')}}" alt="" height="150" width="150" />
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3 my-lg-0">
            <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
              <div class="detail">
                <p class="label">Snack</p>
                <h3 class="heading">AYAM BAKAR KEBULI</h3>
                <a href="#" class="btn-service btn mt-4"><i class="bx bx-shopping-bag"></i> Shop</a>
              </div>
              <div class="img-service">
                <img src="{{asset('backend/images/briyani-animasi.png')}}" alt="" height="150" width="150" />
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
              <div class="detail">
                <p class="label">Minuman</p>
                <h3 class="heading">Orange Yogurt Dingin</h3>
                <a href="#" class="btn-service btn mt-4"><i class="bx bx-shopping-bag"></i> Shop</a>
              </div>
              <div class="img-service">
                <img src="{{asset('backend/images/briyani-animasi.png')}}" alt="" height="150" width="150" />
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
              <div class="detail">
                <p class="label">Makanan Berat</p>
                <h3 class="heading">KEBULI AYAM BAKAR</h3>
                <a href="#" class="btn-service btn mt-4"><i class="bx bx-shopping-bag"></i> Shop</a>
              </div>
              <div class="img-service">
                <img src="{{asset('backend/images/briyani-animasi.png')}}" alt="" height="150" width="150" />
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3 my-lg-0">
            <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
              <div class="detail">
                <p class="label">Snack</p>
                <h3 class="heading">AYAM BAKAR KEBULI</h3>
                <a href="#" class="btn-service btn mt-4"><i class="bx bx-shopping-bag"></i> Shop</a>
              </div>
              <div class="img-service">
                <img src="{{asset('backend/images/briyani-animasi.png')}}" alt="" height="150" width="150" />
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4">
              <div class="detail">
                <p class="label">Minuman</p>
                <h3 class="heading">Orange Yogurt Dingin</h3>
                <a href="#" class="btn-service btn mt-4"><i class="bx bx-shopping-bag"></i> Shop</a>
              </div>
              <div class="img-service">
                <img src="{{asset('backend/images/briyani-animasi.png')}}" alt="" height="150" width="150" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Product -->
    <section class="product section-margin" id="product">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h1 class="heading">OUR MENU</h1>
            <p class="subheading">Beberapa jenis menu yang tersedia</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col populer d-lg-flex justify-content-lg-between">
            <h3 class="heading">Makanan Berat</h3>
            <div class="toggle-slider d-lg-block d-flex justify-content-end">
              <i class="bx bxs-chevron-left-circle"></i>
              <i class="bx bxs-chevron-right-circle"></i>
            </div>
          </div>
        </div>
        <div class="row mt-4 product-populer">
          <div class="col">
            <!-- Swiper -->
            <div class="swiper mySwiperPopuler">
              <div class="swiper-wrapper">
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col populer d-lg-flex justify-content-lg-between">
            <h3 class="heading">Snack</h3>
            <div class="toggle-slider d-lg-block d-flex justify-content-end">
              <i class="bx bxs-chevron-left-circle"></i>
              <i class="bx bxs-chevron-right-circle"></i>
            </div>
          </div>
        </div>
        <div class="row mt-4 product-populer">
          <div class="col">
            <!-- Swiper -->
            <div class="swiper mySwiperPopuler">
              <div class="swiper-wrapper">
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col populer d-lg-flex justify-content-lg-between">
            <h3 class="heading">Minuman</h3>
            <div class="toggle-slider d-lg-block d-flex justify-content-end">
              <i class="bx bxs-chevron-left-circle"></i>
              <i class="bx bxs-chevron-right-circle"></i>
            </div>
          </div>
        </div>
        <div class="row mt-4 product-populer">
          <div class="col">
            <!-- Swiper -->
            <div class="swiper mySwiperPopuler">
              <div class="swiper-wrapper">
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card-product">
                  <div class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                    <img src="{{asset('backend/images/sambosa.jpg')}}" class="img-fluid" alt="" height="150" width="150" />
                  </div>
                  <div class="detail-product mt-3 d-flex justify-content-between">
                    <div class="info">
                      <p class="label text-center py-2">Sambosa</p>
                      <p>Rp 15.000</p>
                    </div>
                    <div class="btn-card">
                      <a href="#" class="btn"><i class="bx bx-shopping-bag"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--  -->
      </div>
    </section>

    <!-- Customer -->
    <section class="customer" id="customer">
      <div class="container mt-5">
        <div class="row text-center">
          <div class="col">
            <h1 class="heading">Customers</h1>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col">
            <img src="{{asset('backend/images/customer1.jpg')}}" height="400" width="400" class="img-thumbnail" alt="..." />
          </div>
          <div class="col">
            <img src="{{asset('backend/images/customer1.jpg')}}" height="400" width="400" class="img-thumbnail" alt="..." />
          </div>
          <div class="col">
            <img src="{{asset('backend/images/customer1.jpg')}}" height="400" width="400" class="img-thumbnail" alt="..." />
          </div>
        </div>
        <div class="row mt-5">
          <div class="col">
            <img src="{{asset('backend/images/customer1.jpg')}}" height="400" width="400" class="img-thumbnail" alt="..." />
          </div>
          <div class="col">
            <img src="{{asset('backend/images/customer1.jpg')}}" height="400" width="400" class="img-thumbnail" alt="..." />
          </div>
          <div class="col">
            <img src="{{asset('backend/images/customer1.jpg')}}" height="400" width="400" class="img-thumbnail" alt="..." />
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial mt-5" id="testimonial">
      <div class="container mt-4">
        <div class="row text-center">
          <div class="col">
            <!-- heading-testimonial -->
            <div class="testimonial-heading">
              <span>-----</span>
              <h1>TESTIMONIALS</h1>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col">
            <!-- testimonial-box-center -->
            <div class="testimonial-box-container">
              <!-- box-1 -->
              <div class="testimonial-box">
                <!-- top -->
                <div class="box-top">
                  <!-- profile -->
                  <div class="profile">
                    <div class="profile-img">
                      <img src="{{asset('backend/images/c-3.jpg')}}" alt="" />
                    </div>
                    <div class="name-user">
                      <strong>Zavir Zakaria</strong>
                      <span>1 years ago</span>
                    </div>
                  </div>
                  <!-- riviews -->
                  <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                </div>

                <!-- Comments -->
                <div class="client-comment">
                  <p>Tempat nyaman, rasanya juga enak. Recommended untuk dikunjungi bareng keluarga besar</p>
                </div>
              </div>

              <!-- box-2 -->
              <div class="testimonial-box">
                <!-- top -->
                <div class="box-top">
                  <!-- profile -->
                  <div class="profile">
                    <div class="profile-img">
                      <img src="{{asset('backend/images/c-2.jpg')}}" alt="" />
                    </div>
                    <div class="name-user">
                      <strong>Mega Kusuma</strong>
                      <span>5 month ago</span>
                    </div>
                  </div>
                  <!-- riviews -->
                  <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>

                <!-- Comments -->
                <div class="client-comment">
                  <p>Reservasi duulu, enak bgt fast respond dan lgsg dapet makan sampe sana. Makanan ayam bakarnya enak, nasi goreng juga enak.</p>
                </div>
              </div>

              <!-- box-3 -->
              <div class="testimonial-box">
                <!-- top -->
                <div class="box-top">
                  <!-- profile -->
                  <div class="profile">
                    <div class="profile-img">
                      <img src="{{asset('backend/images/c-3.jpg')}}" alt="" />
                    </div>
                    <div class="name-user">
                      <strong>Zavir Zakaria</strong>
                      <span>1 years ago</span>
                    </div>
                  </div>
                  <!-- riviews -->
                  <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                </div>

                <!-- Comments -->
                <div class="client-comment">
                  <p>Tempat nyaman, rasanya juga enak. Recommended untuk dikunjungi bareng keluarga besar</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="testimonial-box-container">
            <!-- box-4 -->
            <div class="testimonial-box">
              <!-- top -->
              <div class="box-top">
                <!-- profile -->
                <div class="profile">
                  <div class="profile-img">
                    <img src="{{asset('backend/images/c-3.jpg')}}" alt="" />
                  </div>
                  <div class="name-user">
                    <strong>Zavir Zakaria</strong>
                    <span>1 years ago</span>
                  </div>
                </div>
                <!-- riviews -->
                <div class="reviews">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>

              <!-- Comments -->
              <div class="client-comment">
                <p>Tempat nyaman, rasanya juga enak. Recommended untuk dikunjungi bareng keluarga besar</p>
              </div>
            </div>

            <!-- box-5 -->
            <div class="testimonial-box">
              <!-- top -->
              <div class="box-top">
                <!-- profile -->
                <div class="profile">
                  <div class="profile-img">
                    <img src="{{asset('backend/images/c-3.jpg')}}" alt="" />
                  </div>
                  <div class="name-user">
                    <strong>Zavir Zakaria</strong>
                    <span>1 years ago</span>
                  </div>
                </div>
                <!-- riviews -->
                <div class="reviews">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>

              <!-- Comments -->
              <div class="client-comment">
                <p>Tempat nyaman, rasanya juga enak. Recommended untuk dikunjungi bareng keluarga besar</p>
              </div>
            </div>

            <!-- box-6 -->
            <div class="testimonial-box">
              <!-- top -->
              <div class="box-top">
                <!-- profile -->
                <div class="profile">
                  <div class="profile-img">
                    <img src="{{asset('backend/images/c-3.jpg')}}" alt="" />
                  </div>
                  <div class="name-user">
                    <strong>Zavir Zakaria</strong>
                    <span>1 years ago</span>
                  </div>
                </div>
                <!-- riviews -->
                <div class="reviews">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>

              <!-- Comments -->
              <div class="client-comment">
                <p>Tempat nyaman, rasanya juga enak. Recommended untuk dikunjungi bareng keluarga besar</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="{{asset('backend/js/script.js')}}"></script>
  </body>
</html>